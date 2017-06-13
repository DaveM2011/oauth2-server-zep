
/**
 * @link https://github.com/F21/jwt
 * @author F21
 */
namespace OAuth2\Encryption;

class Jwt implements EncryptionInterface
{
    public function encode(string! payload, string! key, string! algo = "HS256") -> string
    {
        var header, segments, signing_input, signature;

        let header = this->generateJwtHeader(payload, algo);

        let segments = [
            this->urlSafeB64Encode(json_encode(header)),
            this->urlSafeB64Encode(json_encode(payload))
        ];

        let signing_input = implode(".", segments);
        let signature = this->sign(signing_input, key, algo);
        let segments[] = this->urlsafeB64Encode(signature);

        return implode(".", segments);
    }

    public function decode(string! jwt, string! key = null, bool verify = true) -> string
    {
        var tks, headb64, payloadb64, cryptob64, sig, payload, header;

        if !strpos(jwt, ".") {
            return;
        }

        let tks = explode(".", jwt);

        if count(tks) != 3 {
            return;
        }

        let headb64 = tks[0];
        let payloadb64 = tks[1];
        let cryptob64 = tks[2];

        let header = json_decode(this->urlSafeB64Decode(headb64), true);
        if typeof header == "null" {
            return;
        }

        let payload = json_decode(this->urlSafeB64Decode(payloadb64), true);
        if typeof payload == "null" {
            return;
        }

        let sig = this->urlSafeB64Decode(cryptob64);

        if verify {
            if !isset header["alg"] {
                return;
            }

            if !this->verifySignature(sig, headb64 . "." . payloadb64, key, header["alg"]) {
                return;
            }
        }

        return payload;
    }

    private function verifySignature(string signature, string input, string key, string algo = "HS256")
    {
        // use constants when possible, for HipHop support
        switch algo {
            case"HS256":
            case"HS384":
            case"HS512":
                return this->hash_equals(
                    this->sign(input, key, algo),
                    signature
                );

            case "RS256":
                return openssl_verify(input, signature, key, defined("OPENSSL_ALGO_SHA256") ? OPENSSL_ALGO_SHA256 : "sha256")  === 1;

            case "RS384":
                return openssl_verify(input, signature, key, defined("OPENSSL_ALGO_SHA384") ? OPENSSL_ALGO_SHA384 : "sha384") === 1;

            case "RS512":
                return openssl_verify(input, signature, key, defined("OPENSSL_ALGO_SHA512") ? OPENSSL_ALGO_SHA512 : "sha512") === 1;

            default:
                throw new \InvalidArgumentException("Unsupported or invalid signing algorithm.");
        }
    }

    private function sign(input, key, algo = "HS256")
    {
        switch algo {
            case "HS256":
                return hash_hmac("sha256", input, key, true);

            case "HS384":
                return hash_hmac("sha384", input, key, true);

            case "HS512":
                return hash_hmac("sha512", input, key, true);

            case "RS256":
                return this->generateRSASignature(input, key, defined("OPENSSL_ALGO_SHA256") ? OPENSSL_ALGO_SHA256 : "sha256");

            case "RS384":
                return this->generateRSASignature(input, key, defined("OPENSSL_ALGO_SHA384") ? OPENSSL_ALGO_SHA384 : "sha384");

            case "RS512":
                return this->generateRSASignature(input, key, defined("OPENSSL_ALGO_SHA512") ? OPENSSL_ALGO_SHA512 : "sha512");

            default:
                throw new \Exception("Unsupported or invalid signing algorithm.");
        }
    }

    private function generateRSASignature(input, key, algo)
    {
        var signature;
        if !openssl_sign(input, signature, key, algo) {
            throw new \Exception("Unable to sign data.");
        }

        return signature;
    }

    public function urlSafeB64Encode(data)
    {
        var b64;
        let b64 = base64_encode(data);
        let b64 = str_replace(["+", "/", "\\r", "\\n", "="], ["-", "_"], b64);
        return b64;
    }

    public function urlSafeB64Decode(b64)
    {
        //var b64;
        let b64 = str_replace(["-", "_"], ["+", "/"], b64);
        return base64_decode(b64);
    }

    /**
     * Override to create a custom header
     */
    protected function generateJwtHeader(payload, algorithm)
    {
        return ["typ": "JWT", "alg": algorithm];
    }

    protected function hash_equals(var a, var b)
    {
        var diff, i = 0;

        if function_exists("hash_equals") {
            return hash_equals(a, b);
        }
        let diff = strlen(a) ^ strlen(b);
        loop {
            if i == strlen(a) && i == strlen(b) { break; }
            let diff = ord(a[i]) ^ ord(b[i]);
            let i++;
        }
        return diff === 0;
    }
}
