<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/job_service.proto

namespace GPBMetadata\Google\Cloud\Talent\V4Beta1;

class JobService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Batch::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Filters::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Histogram::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Job::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0abf2d0a2d676f6f676c652f636c6f75642f74616c656e742f7634626574" .
            "61312f6a6f625f736572766963652e70726f746f121b676f6f676c652e63" .
            "6c6f75642e74616c656e742e763462657461311a17676f6f676c652f6170" .
            "692f636c69656e742e70726f746f1a27676f6f676c652f636c6f75642f74" .
            "616c656e742f763462657461312f62617463682e70726f746f1a28676f6f" .
            "676c652f636c6f75642f74616c656e742f763462657461312f636f6d6d6f" .
            "6e2e70726f746f1a29676f6f676c652f636c6f75642f74616c656e742f76" .
            "3462657461312f66696c746572732e70726f746f1a2b676f6f676c652f63" .
            "6c6f75642f74616c656e742f763462657461312f686973746f6772616d2e" .
            "70726f746f1a25676f6f676c652f636c6f75642f74616c656e742f763462" .
            "657461312f6a6f622e70726f746f1a23676f6f676c652f6c6f6e6772756e" .
            "6e696e672f6f7065726174696f6e732e70726f746f1a19676f6f676c652f" .
            "70726f746f6275662f616e792e70726f746f1a1e676f6f676c652f70726f" .
            "746f6275662f6475726174696f6e2e70726f746f1a1b676f6f676c652f70" .
            "726f746f6275662f656d7074792e70726f746f1a20676f6f676c652f7072" .
            "6f746f6275662f6669656c645f6d61736b2e70726f746f22510a10437265" .
            "6174654a6f6252657175657374120e0a06706172656e7418012001280912" .
            "2d0a036a6f6218022001280b32202e676f6f676c652e636c6f75642e7461" .
            "6c656e742e763462657461312e4a6f62221d0a0d4765744a6f6252657175" .
            "657374120c0a046e616d6518012001280922720a105570646174654a6f62" .
            "52657175657374122d0a036a6f6218012001280b32202e676f6f676c652e" .
            "636c6f75642e74616c656e742e763462657461312e4a6f62122f0a0b7570" .
            "646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f" .
            "6275662e4669656c644d61736b22200a1044656c6574654a6f6252657175" .
            "657374120c0a046e616d6518012001280922380a16426174636844656c65" .
            "74654a6f627352657175657374120e0a06706172656e7418012001280912" .
            "0e0a0666696c7465721802200128092290010a0f4c6973744a6f62735265" .
            "7175657374120e0a06706172656e74180120012809120e0a0666696c7465" .
            "7218022001280912120a0a706167655f746f6b656e18032001280912110a" .
            "09706167655f73697a6518042001280512360a086a6f625f766965771805" .
            "2001280e32242e676f6f676c652e636c6f75642e74616c656e742e763462" .
            "657461312e4a6f6256696577229c010a104c6973744a6f6273526573706f" .
            "6e7365122e0a046a6f627318012003280b32202e676f6f676c652e636c6f" .
            "75642e74616c656e742e763462657461312e4a6f6212170a0f6e6578745f" .
            "706167655f746f6b656e180220012809123f0a086d657461646174611803" .
            "2001280b322d2e676f6f676c652e636c6f75642e74616c656e742e763462" .
            "657461312e526573706f6e73654d6574616461746122a0090a1153656172" .
            "63684a6f627352657175657374120e0a06706172656e7418012001280912" .
            "4e0a0b7365617263685f6d6f646518022001280e32392e676f6f676c652e" .
            "636c6f75642e74616c656e742e763462657461312e5365617263684a6f62" .
            "73526571756573742e5365617263684d6f646512460a1072657175657374" .
            "5f6d6574616461746118032001280b322c2e676f6f676c652e636c6f7564" .
            "2e74616c656e742e763462657461312e526571756573744d657461646174" .
            "6112380a096a6f625f717565727918042001280b32252e676f6f676c652e" .
            "636c6f75642e74616c656e742e763462657461312e4a6f62517565727912" .
            "190a11656e61626c655f62726f6164656e696e6718052001280812230a1b" .
            "726571756972655f707265636973655f726573756c745f73697a65180620" .
            "01280812460a11686973746f6772616d5f7175657269657318072003280b" .
            "322b2e676f6f676c652e636c6f75642e74616c656e742e76346265746131" .
            "2e486973746f6772616d517565727912360a086a6f625f76696577180820" .
            "01280e32242e676f6f676c652e636c6f75642e74616c656e742e76346265" .
            "7461312e4a6f6256696577120e0a066f666673657418092001280512110a" .
            "09706167655f73697a65180a2001280512120a0a706167655f746f6b656e" .
            "180b2001280912100a086f726465725f6279180c2001280912620a156469" .
            "76657273696669636174696f6e5f6c6576656c180d2001280e32432e676f" .
            "6f676c652e636c6f75642e74616c656e742e763462657461312e53656172" .
            "63684a6f6273526571756573742e446976657273696669636174696f6e4c" .
            "6576656c125d0a13637573746f6d5f72616e6b696e675f696e666f180e20" .
            "01280b32402e676f6f676c652e636c6f75642e74616c656e742e76346265" .
            "7461312e5365617263684a6f6273526571756573742e437573746f6d5261" .
            "6e6b696e67496e666f121d0a1564697361626c655f6b6579776f72645f6d" .
            "617463681810200128081a90020a11437573746f6d52616e6b696e67496e" .
            "666f126a0a10696d706f7274616e63655f6c6576656c18012001280e3250" .
            "2e676f6f676c652e636c6f75642e74616c656e742e763462657461312e53" .
            "65617263684a6f6273526571756573742e437573746f6d52616e6b696e67" .
            "496e666f2e496d706f7274616e63654c6576656c121a0a1272616e6b696e" .
            "675f65787072657373696f6e18022001280922730a0f496d706f7274616e" .
            "63654c6576656c12200a1c494d504f5254414e43455f4c4556454c5f554e" .
            "535045434946494544100012080a044e4f4e45100112070a034c4f571002" .
            "12080a044d494c441003120a0a064d454449554d100412080a0448494748" .
            "1005120b0a0745585452454d45100622520a0a5365617263684d6f646512" .
            "1b0a175345415243485f4d4f44455f554e5350454349464945441000120e" .
            "0a0a4a4f425f534541524348100112170a1346454154555245445f4a4f42" .
            "5f534541524348100222570a14446976657273696669636174696f6e4c65" .
            "76656c12250a21444956455253494649434154494f4e5f4c4556454c5f55" .
            "4e5350454349464945441000120c0a0844495341424c45441001120a0a06" .
            "53494d504c45100222d7060a125365617263684a6f6273526573706f6e73" .
            "6512520a0d6d61746368696e675f6a6f627318012003280b323b2e676f6f" .
            "676c652e636c6f75642e74616c656e742e763462657461312e5365617263" .
            "684a6f6273526573706f6e73652e4d61746368696e674a6f6212520a1768" .
            "6973746f6772616d5f71756572795f726573756c747318022003280b3231" .
            "2e676f6f676c652e636c6f75642e74616c656e742e763462657461312e48" .
            "6973746f6772616d5175657279526573756c7412170a0f6e6578745f7061" .
            "67655f746f6b656e180320012809123f0a106c6f636174696f6e5f66696c" .
            "7465727318042003280b32252e676f6f676c652e636c6f75642e74616c65" .
            "6e742e763462657461312e4c6f636174696f6e121c0a14657374696d6174" .
            "65645f746f74616c5f73697a6518052001280512120a0a746f74616c5f73" .
            "697a65180620012805123f0a086d6574616461746118072001280b322d2e" .
            "676f6f676c652e636c6f75642e74616c656e742e763462657461312e5265" .
            "73706f6e73654d6574616461746112220a1a62726f6164656e65645f7175" .
            "6572795f6a6f62735f636f756e7418082001280512490a107370656c6c5f" .
            "636f7272656374696f6e18092001280b322f2e676f6f676c652e636c6f75" .
            "642e74616c656e742e763462657461312e5370656c6c696e67436f727265" .
            "6374696f6e1adc010a0b4d61746368696e674a6f62122d0a036a6f621801" .
            "2001280b32202e676f6f676c652e636c6f75642e74616c656e742e763462" .
            "657461312e4a6f6212130a0b6a6f625f73756d6d61727918022001280912" .
            "190a116a6f625f7469746c655f736e6970706574180320012809121b0a13" .
            "7365617263685f746578745f736e697070657418042001280912510a0c63" .
            "6f6d6d7574655f696e666f18052001280b323b2e676f6f676c652e636c6f" .
            "75642e74616c656e742e763462657461312e5365617263684a6f62735265" .
            "73706f6e73652e436f6d6d757465496e666f1a7e0a0b436f6d6d75746549" .
            "6e666f123b0a0c6a6f625f6c6f636174696f6e18012001280b32252e676f" .
            "6f676c652e636c6f75642e74616c656e742e763462657461312e4c6f6361" .
            "74696f6e12320a0f74726176656c5f6475726174696f6e18022001280b32" .
            "192e676f6f676c652e70726f746f6275662e4475726174696f6e22580a16" .
            "42617463684372656174654a6f627352657175657374120e0a0670617265" .
            "6e74180120012809122e0a046a6f627318022003280b32202e676f6f676c" .
            "652e636c6f75642e74616c656e742e763462657461312e4a6f622289010a" .
            "1642617463685570646174654a6f627352657175657374120e0a06706172" .
            "656e74180120012809122e0a046a6f627318022003280b32202e676f6f67" .
            "6c652e636c6f75642e74616c656e742e763462657461312e4a6f62122f0a" .
            "0b7570646174655f6d61736b18032001280b321a2e676f6f676c652e7072" .
            "6f746f6275662e4669656c644d61736b2a760a074a6f625669657712180a" .
            "144a4f425f564945575f554e535045434946494544100012140a104a4f42" .
            "5f564945575f49445f4f4e4c59100112140a104a4f425f564945575f4d49" .
            "4e494d414c100212120a0e4a4f425f564945575f534d414c4c100312110a" .
            "0d4a4f425f564945575f46554c4c10043290110a0a4a6f62536572766963" .
            "6512bc010a094372656174654a6f62122d2e676f6f676c652e636c6f7564" .
            "2e74616c656e742e763462657461312e4372656174654a6f625265717565" .
            "73741a202e676f6f676c652e636c6f75642e74616c656e742e7634626574" .
            "61312e4a6f62225e82d3e4930258222b2f763462657461312f7b70617265" .
            "6e743d70726f6a656374732f2a2f74656e616e74732f2a7d2f6a6f62733a" .
            "012a5a2622212f763462657461312f7b706172656e743d70726f6a656374" .
            "732f2a7d2f6a6f62733a012a12b0010a064765744a6f62122a2e676f6f67" .
            "6c652e636c6f75642e74616c656e742e763462657461312e4765744a6f62" .
            "526571756573741a202e676f6f676c652e636c6f75642e74616c656e742e" .
            "763462657461312e4a6f62225882d3e4930252122b2f763462657461312f" .
            "7b6e616d653d70726f6a656374732f2a2f74656e616e74732f2a2f6a6f62" .
            "732f2a7d5a2312212f763462657461312f7b6e616d653d70726f6a656374" .
            "732f2a2f6a6f62732f2a7d12c4010a095570646174654a6f62122d2e676f" .
            "6f676c652e636c6f75642e74616c656e742e763462657461312e55706461" .
            "74654a6f62526571756573741a202e676f6f676c652e636c6f75642e7461" .
            "6c656e742e763462657461312e4a6f62226682d3e4930260322f2f763462" .
            "657461312f7b6a6f622e6e616d653d70726f6a656374732f2a2f74656e61" .
            "6e74732f2a2f6a6f62732f2a7d3a012a5a2a32252f763462657461312f7b" .
            "6a6f622e6e616d653d70726f6a656374732f2a2f6a6f62732f2a7d3a012a" .
            "12ac010a0944656c6574654a6f62122d2e676f6f676c652e636c6f75642e" .
            "74616c656e742e763462657461312e44656c6574654a6f62526571756573" .
            "741a162e676f6f676c652e70726f746f6275662e456d707479225882d3e4" .
            "9302522a2b2f763462657461312f7b6e616d653d70726f6a656374732f2a" .
            "2f74656e616e74732f2a2f6a6f62732f2a7d5a232a212f76346265746131" .
            "2f7b6e616d653d70726f6a656374732f2a2f6a6f62732f2a7d12c1010a08" .
            "4c6973744a6f6273122c2e676f6f676c652e636c6f75642e74616c656e74" .
            "2e763462657461312e4c6973744a6f6273526571756573741a2d2e676f6f" .
            "676c652e636c6f75642e74616c656e742e763462657461312e4c6973744a" .
            "6f6273526573706f6e7365225882d3e4930252122b2f763462657461312f" .
            "7b706172656e743d70726f6a656374732f2a2f74656e616e74732f2a7d2f" .
            "6a6f62735a2312212f763462657461312f7b706172656e743d70726f6a65" .
            "6374732f2a7d2f6a6f627312d3010a0f426174636844656c6574654a6f62" .
            "7312332e676f6f676c652e636c6f75642e74616c656e742e763462657461" .
            "312e426174636844656c6574654a6f6273526571756573741a162e676f6f" .
            "676c652e70726f746f6275662e456d707479227382d3e493026d22372f76" .
            "3462657461312f7b706172656e743d70726f6a656374732f2a2f74656e61" .
            "6e74732f2a7d2f6a6f62733a626174636844656c6574653a012a5a2f222d" .
            "2f763462657461312f7b706172656e743d70726f6a656374732f2a7d2f6a" .
            "6f62733a626174636844656c65746512db010a0a5365617263684a6f6273" .
            "122e2e676f6f676c652e636c6f75642e74616c656e742e76346265746131" .
            "2e5365617263684a6f6273526571756573741a2f2e676f6f676c652e636c" .
            "6f75642e74616c656e742e763462657461312e5365617263684a6f627352" .
            "6573706f6e7365226c82d3e493026622322f763462657461312f7b706172" .
            "656e743d70726f6a656374732f2a2f74656e616e74732f2a7d2f6a6f6273" .
            "3a7365617263683a012a5a2d22282f763462657461312f7b706172656e74" .
            "3d70726f6a656374732f2a7d2f6a6f62733a7365617263683a012a12f301" .
            "0a125365617263684a6f6273466f72416c657274122e2e676f6f676c652e" .
            "636c6f75642e74616c656e742e763462657461312e5365617263684a6f62" .
            "73526571756573741a2f2e676f6f676c652e636c6f75642e74616c656e74" .
            "2e763462657461312e5365617263684a6f6273526573706f6e7365227c82" .
            "d3e4930276223a2f763462657461312f7b706172656e743d70726f6a6563" .
            "74732f2a2f74656e616e74732f2a7d2f6a6f62733a736561726368466f72" .
            "416c6572743a012a5a3522302f763462657461312f7b706172656e743d70" .
            "726f6a656374732f2a7d2f6a6f62733a736561726368466f72416c657274" .
            "3a012a12dd010a0f42617463684372656174654a6f627312332e676f6f67" .
            "6c652e636c6f75642e74616c656e742e763462657461312e426174636843" .
            "72656174654a6f6273526571756573741a1d2e676f6f676c652e6c6f6e67" .
            "72756e6e696e672e4f7065726174696f6e227682d3e493027022372f7634" .
            "62657461312f7b706172656e743d70726f6a656374732f2a2f74656e616e" .
            "74732f2a7d2f6a6f62733a62617463684372656174653a012a5a32222d2f" .
            "763462657461312f7b706172656e743d70726f6a656374732f2a7d2f6a6f" .
            "62733a62617463684372656174653a012a12dd010a0f4261746368557064" .
            "6174654a6f627312332e676f6f676c652e636c6f75642e74616c656e742e" .
            "763462657461312e42617463685570646174654a6f627352657175657374" .
            "1a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f" .
            "6e227682d3e493027022372f763462657461312f7b706172656e743d7072" .
            "6f6a656374732f2a2f74656e616e74732f2a7d2f6a6f62733a6261746368" .
            "5570646174653a012a5a32222d2f763462657461312f7b706172656e743d" .
            "70726f6a656374732f2a7d2f6a6f62733a62617463685570646174653a01" .
            "2a1a6cca41136a6f62732e676f6f676c65617069732e636f6dd241536874" .
            "7470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f" .
            "636c6f75642d706c6174666f726d2c68747470733a2f2f7777772e676f6f" .
            "676c65617069732e636f6d2f617574682f6a6f6273427d0a1f636f6d2e67" .
            "6f6f676c652e636c6f75642e74616c656e742e76346265746131420f4a6f" .
            "625365727669636550726f746f50015a41676f6f676c652e676f6c616e67" .
            "2e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f7564" .
            "2f74616c656e742f763462657461313b74616c656e74a202034354536206" .
            "70726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

