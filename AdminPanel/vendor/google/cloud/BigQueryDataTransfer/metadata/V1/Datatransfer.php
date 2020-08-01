<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datatransfer.proto

namespace GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1;

class Datatransfer
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Transfer::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae64d0a38676f6f676c652f636c6f75642f62696771756572792f646174" .
            "617472616e736665722f76312f646174617472616e736665722e70726f74" .
            "6f1225676f6f676c652e636c6f75642e62696771756572792e6461746174" .
            "72616e736665722e76311a17676f6f676c652f6170692f636c69656e742e" .
            "70726f746f1a1f676f6f676c652f6170692f6669656c645f626568617669" .
            "6f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e" .
            "70726f746f1a34676f6f676c652f636c6f75642f62696771756572792f64" .
            "6174617472616e736665722f76312f7472616e736665722e70726f746f1a" .
            "1e676f6f676c652f70726f746f6275662f6475726174696f6e2e70726f74" .
            "6f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f" .
            "1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70" .
            "726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d" .
            "702e70726f746f1a1e676f6f676c652f70726f746f6275662f7772617070" .
            "6572732e70726f746f2285050a1344617461536f75726365506172616d65" .
            "74657212100a08706172616d5f696418012001280912140a0c646973706c" .
            "61795f6e616d6518022001280912130a0b6465736372697074696f6e1803" .
            "20012809124d0a047479706518042001280e323f2e676f6f676c652e636c" .
            "6f75642e62696771756572792e646174617472616e736665722e76312e44" .
            "617461536f75726365506172616d657465722e5479706512100a08726571" .
            "756972656418052001280812100a08726570656174656418062001280812" .
            "180a1076616c69646174696f6e5f726567657818072001280912160a0e61" .
            "6c6c6f7765645f76616c756573180820032809122f0a096d696e5f76616c" .
            "756518092001280b321c2e676f6f676c652e70726f746f6275662e446f75" .
            "626c6556616c7565122f0a096d61785f76616c7565180a2001280b321c2e" .
            "676f6f676c652e70726f746f6275662e446f75626c6556616c7565124a0a" .
            "066669656c6473180b2003280b323a2e676f6f676c652e636c6f75642e62" .
            "696771756572792e646174617472616e736665722e76312e44617461536f" .
            "75726365506172616d65746572121e0a1676616c69646174696f6e5f6465" .
            "736372697074696f6e180c20012809121b0a1376616c69646174696f6e5f" .
            "68656c705f75726c180d2001280912110a09696d6d757461626c65180e20" .
            "012808120f0a0772656375727365180f2001280812120a0a646570726563" .
            "6174656418142001280822690a045479706512140a10545950455f554e53" .
            "50454349464945441000120a0a06535452494e471001120b0a07494e5445" .
            "4745521002120a0a06444f55424c451003120b0a07424f4f4c45414e1004" .
            "120a0a065245434f52441005120d0a09504c55535f504147451006229c09" .
            "0a0a44617461536f7572636512110a046e616d651801200128094203e041" .
            "0312160a0e646174615f736f757263655f696418022001280912140a0c64" .
            "6973706c61795f6e616d6518032001280912130a0b646573637269707469" .
            "6f6e18042001280912110a09636c69656e745f6964180520012809120e0a" .
            "0673636f706573180620032809124e0a0d7472616e736665725f74797065" .
            "18072001280e32332e676f6f676c652e636c6f75642e6269677175657279" .
            "2e646174617472616e736665722e76312e5472616e736665725479706542" .
            "02180112270a1b737570706f7274735f6d756c7469706c655f7472616e73" .
            "6665727318082001280842021801121f0a177570646174655f646561646c" .
            "696e655f7365636f6e647318092001280512180a1064656661756c745f73" .
            "63686564756c65180a2001280912200a18737570706f7274735f63757374" .
            "6f6d5f7363686564756c65180b20012808124e0a0a706172616d65746572" .
            "73180c2003280b323a2e676f6f676c652e636c6f75642e62696771756572" .
            "792e646174617472616e736665722e76312e44617461536f757263655061" .
            "72616d6574657212100a0868656c705f75726c180d20012809125f0a1261" .
            "7574686f72697a6174696f6e5f74797065180e2001280e32432e676f6f67" .
            "6c652e636c6f75642e62696771756572792e646174617472616e73666572" .
            "2e76312e44617461536f757263652e417574686f72697a6174696f6e5479" .
            "7065125c0a11646174615f726566726573685f74797065180f2001280e32" .
            "412e676f6f676c652e636c6f75642e62696771756572792e646174617472" .
            "616e736665722e76312e44617461536f757263652e446174615265667265" .
            "73685479706512280a2064656661756c745f646174615f72656672657368" .
            "5f77696e646f775f64617973181020012805121c0a146d616e75616c5f72" .
            "756e735f64697361626c6564181120012808123c0a196d696e696d756d5f" .
            "7363686564756c655f696e74657276616c18122001280b32192e676f6f67" .
            "6c652e70726f746f6275662e4475726174696f6e228a010a11417574686f" .
            "72697a6174696f6e5479706512220a1e415554484f52495a4154494f4e5f" .
            "545950455f554e535045434946494544100012160a12415554484f52495a" .
            "4154494f4e5f434f4445100112220a1e474f4f474c455f504c55535f4155" .
            "54484f52495a4154494f4e5f434f4445100212150a1146495253545f5041" .
            "5254595f4f41555448100322630a0f446174615265667265736854797065" .
            "12210a1d444154415f524546524553485f545950455f554e535045434946" .
            "494544100012120a0e534c4944494e475f57494e444f57100112190a1543" .
            "5553544f4d5f534c4944494e475f57494e444f5710023aa501ea41a1010a" .
            "2e6269677175657279646174617472616e736665722e676f6f676c656170" .
            "69732e636f6d2f44617461536f75726365122c70726f6a656374732f7b70" .
            "726f6a6563747d2f64617461536f75726365732f7b646174615f736f7572" .
            "63657d124170726f6a656374732f7b70726f6a6563747d2f6c6f63617469" .
            "6f6e732f7b6c6f636174696f6e7d2f64617461536f75726365732f7b6461" .
            "74615f736f757263657d225c0a1447657444617461536f75726365526571" .
            "7565737412440a046e616d651801200128094236e04102fa41300a2e6269" .
            "677175657279646174617472616e736665722e676f6f676c65617069732e" .
            "636f6d2f44617461536f757263652287010a164c69737444617461536f75" .
            "726365735265717565737412460a06706172656e741801200128094236e0" .
            "4102fa4130122e6269677175657279646174617472616e736665722e676f" .
            "6f676c65617069732e636f6d2f44617461536f7572636512120a0a706167" .
            "655f746f6b656e18032001280912110a09706167655f73697a6518042001" .
            "28052280010a174c69737444617461536f7572636573526573706f6e7365" .
            "12470a0c646174615f736f757263657318012003280b32312e676f6f676c" .
            "652e636c6f75642e62696771756572792e646174617472616e736665722e" .
            "76312e44617461536f75726365121c0a0f6e6578745f706167655f746f6b" .
            "656e1802200128094203e04103228e020a1b4372656174655472616e7366" .
            "6572436f6e66696752657175657374124a0a06706172656e741801200128" .
            "09423ae04102fa413412326269677175657279646174617472616e736665" .
            "722e676f6f676c65617069732e636f6d2f5472616e73666572436f6e6669" .
            "6712530a0f7472616e736665725f636f6e66696718022001280b32352e67" .
            "6f6f676c652e636c6f75642e62696771756572792e646174617472616e73" .
            "6665722e76312e5472616e73666572436f6e6669674203e04102121a0a12" .
            "617574686f72697a6174696f6e5f636f646518032001280912140a0c7665" .
            "7273696f6e5f696e666f180520012809121c0a14736572766963655f6163" .
            "636f756e745f6e616d6518062001280922f8010a1b557064617465547261" .
            "6e73666572436f6e6669675265717565737412530a0f7472616e73666572" .
            "5f636f6e66696718012001280b32352e676f6f676c652e636c6f75642e62" .
            "696771756572792e646174617472616e736665722e76312e5472616e7366" .
            "6572436f6e6669674203e04102121a0a12617574686f72697a6174696f6e" .
            "5f636f646518032001280912340a0b7570646174655f6d61736b18042001" .
            "280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b" .
            "4203e0410212140a0c76657273696f6e5f696e666f180520012809121c0a" .
            "14736572766963655f6163636f756e745f6e616d6518062001280922640a" .
            "184765745472616e73666572436f6e6669675265717565737412480a046e" .
            "616d65180120012809423ae04102fa41340a326269677175657279646174" .
            "617472616e736665722e676f6f676c65617069732e636f6d2f5472616e73" .
            "666572436f6e66696722670a1b44656c6574655472616e73666572436f6e" .
            "6669675265717565737412480a046e616d65180120012809423ae04102fa" .
            "41340a326269677175657279646174617472616e736665722e676f6f676c" .
            "65617069732e636f6d2f5472616e73666572436f6e66696722560a154765" .
            "745472616e7366657252756e52657175657374123d0a046e616d65180120" .
            "012809422fe04102fa41290a276269677175657279646174617472616e73" .
            "6665722e676f6f676c65617069732e636f6d2f52756e22590a1844656c65" .
            "74655472616e7366657252756e52657175657374123d0a046e616d651801" .
            "20012809422fe04102fa41290a276269677175657279646174617472616e" .
            "736665722e676f6f676c65617069732e636f6d2f52756e22a8010a1a4c69" .
            "73745472616e73666572436f6e6669677352657175657374124a0a067061" .
            "72656e74180120012809423ae04102fa4134123262696771756572796461" .
            "74617472616e736665722e676f6f676c65617069732e636f6d2f5472616e" .
            "73666572436f6e66696712170a0f646174615f736f757263655f69647318" .
            "022003280912120a0a706167655f746f6b656e18032001280912110a0970" .
            "6167655f73697a651804200128052291010a1b4c6973745472616e736665" .
            "72436f6e66696773526573706f6e736512540a107472616e736665725f63" .
            "6f6e6669677318012003280b32352e676f6f676c652e636c6f75642e6269" .
            "6771756572792e646174617472616e736665722e76312e5472616e736665" .
            "72436f6e6669674203e04103121c0a0f6e6578745f706167655f746f6b65" .
            "6e1802200128094203e0410322de020a174c6973745472616e7366657252" .
            "756e7352657175657374123f0a06706172656e74180120012809422fe041" .
            "02fa412912276269677175657279646174617472616e736665722e676f6f" .
            "676c65617069732e636f6d2f52756e12440a067374617465731802200328" .
            "0e32342e676f6f676c652e636c6f75642e62696771756572792e64617461" .
            "7472616e736665722e76312e5472616e73666572537461746512120a0a70" .
            "6167655f746f6b656e18032001280912110a09706167655f73697a651804" .
            "20012805125e0a0b72756e5f617474656d707418052001280e32492e676f" .
            "6f676c652e636c6f75642e62696771756572792e646174617472616e7366" .
            "65722e76312e4c6973745472616e7366657252756e73526571756573742e" .
            "52756e417474656d707422350a0a52756e417474656d7074121b0a175255" .
            "4e5f415454454d50545f554e5350454349464945441000120a0a064c4154" .
            "45535410012288010a184c6973745472616e7366657252756e7352657370" .
            "6f6e7365124e0a0d7472616e736665725f72756e7318012003280b32322e" .
            "676f6f676c652e636c6f75642e62696771756572792e646174617472616e" .
            "736665722e76312e5472616e7366657252756e4203e04103121c0a0f6e65" .
            "78745f706167655f746f6b656e1802200128094203e0410322e0010a174c" .
            "6973745472616e736665724c6f677352657175657374123f0a0670617265" .
            "6e74180120012809422fe04102fa41290a27626967717565727964617461" .
            "7472616e736665722e676f6f676c65617069732e636f6d2f52756e12120a" .
            "0a706167655f746f6b656e18042001280912110a09706167655f73697a65" .
            "180520012805125d0a0d6d6573736167655f747970657318062003280e32" .
            "462e676f6f676c652e636c6f75642e62696771756572792e646174617472" .
            "616e736665722e76312e5472616e736665724d6573736167652e4d657373" .
            "61676553657665726974792290010a184c6973745472616e736665724c6f" .
            "6773526573706f6e736512560a117472616e736665725f6d657373616765" .
            "7318012003280b32362e676f6f676c652e636c6f75642e62696771756572" .
            "792e646174617472616e736665722e76312e5472616e736665724d657373" .
            "6167654203e04103121c0a0f6e6578745f706167655f746f6b656e180220" .
            "0128094203e04103225e0a16436865636b56616c69644372656473526571" .
            "7565737412440a046e616d651801200128094236e04102fa41300a2e6269" .
            "677175657279646174617472616e736665722e676f6f676c65617069732e" .
            "636f6d2f44617461536f7572636522320a17436865636b56616c69644372" .
            "656473526573706f6e736512170a0f6861735f76616c69645f6372656473" .
            "18012001280822d1010a1b5363686564756c655472616e7366657252756e" .
            "7352657175657374124a0a06706172656e74180120012809423ae04102fa" .
            "41340a326269677175657279646174617472616e736665722e676f6f676c" .
            "65617069732e636f6d2f5472616e73666572436f6e66696712330a0a7374" .
            "6172745f74696d6518022001280b321a2e676f6f676c652e70726f746f62" .
            "75662e54696d657374616d704203e0410212310a08656e645f74696d6518" .
            "032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374" .
            "616d704203e0410222600a1c5363686564756c655472616e736665725275" .
            "6e73526573706f6e736512400a0472756e7318012003280b32322e676f6f" .
            "676c652e636c6f75642e62696771756572792e646174617472616e736665" .
            "722e76312e5472616e7366657252756e2287030a1e53746172744d616e75" .
            "616c5472616e7366657252756e735265717565737412470a06706172656e" .
            "741801200128094237fa41340a326269677175657279646174617472616e" .
            "736665722e676f6f676c65617069732e636f6d2f5472616e73666572436f" .
            "6e666967126f0a147265717565737465645f74696d655f72616e67651803" .
            "2001280b324f2e676f6f676c652e636c6f75642e62696771756572792e64" .
            "6174617472616e736665722e76312e53746172744d616e75616c5472616e" .
            "7366657252756e73526571756573742e54696d6552616e6765480012380a" .
            "127265717565737465645f72756e5f74696d6518042001280b321a2e676f" .
            "6f676c652e70726f746f6275662e54696d657374616d7048001a690a0954" .
            "696d6552616e6765122e0a0a73746172745f74696d6518012001280b321a" .
            "2e676f6f676c652e70726f746f6275662e54696d657374616d70122c0a08" .
            "656e645f74696d6518022001280b321a2e676f6f676c652e70726f746f62" .
            "75662e54696d657374616d7042060a0474696d6522630a1f53746172744d" .
            "616e75616c5472616e7366657252756e73526573706f6e736512400a0472" .
            "756e7318012003280b32322e676f6f676c652e636c6f75642e6269677175" .
            "6572792e646174617472616e736665722e76312e5472616e736665725275" .
            "6e32c31f0a13446174615472616e736665725365727669636512e6010a0d" .
            "47657444617461536f75726365123b2e676f6f676c652e636c6f75642e62" .
            "696771756572792e646174617472616e736665722e76312e476574446174" .
            "61536f75726365526571756573741a312e676f6f676c652e636c6f75642e" .
            "62696771756572792e646174617472616e736665722e76312e4461746153" .
            "6f75726365226582d3e4930258122f2f76312f7b6e616d653d70726f6a65" .
            "6374732f2a2f6c6f636174696f6e732f2a2f64617461536f75726365732f" .
            "2a7d5a2512232f76312f7b6e616d653d70726f6a656374732f2a2f646174" .
            "61536f75726365732f2a7dda41046e616d6512f9010a0f4c697374446174" .
            "61536f7572636573123d2e676f6f676c652e636c6f75642e626967717565" .
            "72792e646174617472616e736665722e76312e4c69737444617461536f75" .
            "72636573526571756573741a3e2e676f6f676c652e636c6f75642e626967" .
            "71756572792e646174617472616e736665722e76312e4c69737444617461" .
            "536f7572636573526573706f6e7365226782d3e4930258122f2f76312f7b" .
            "706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d" .
            "2f64617461536f75726365735a2512232f76312f7b706172656e743d7072" .
            "6f6a656374732f2a7d2f64617461536f7572636573da4106706172656e74" .
            "12b6020a144372656174655472616e73666572436f6e66696712422e676f" .
            "6f676c652e636c6f75642e62696771756572792e646174617472616e7366" .
            "65722e76312e4372656174655472616e73666572436f6e66696752657175" .
            "6573741a352e676f6f676c652e636c6f75642e62696771756572792e6461" .
            "74617472616e736665722e76312e5472616e73666572436f6e66696722a2" .
            "0182d3e49302820122332f76312f7b706172656e743d70726f6a65637473" .
            "2f2a2f6c6f636174696f6e732f2a7d2f7472616e73666572436f6e666967" .
            "733a0f7472616e736665725f636f6e6669675a3a22272f76312f7b706172" .
            "656e743d70726f6a656374732f2a7d2f7472616e73666572436f6e666967" .
            "733a0f7472616e736665725f636f6e666967da4116706172656e742c7472" .
            "616e736665725f636f6e66696712db020a145570646174655472616e7366" .
            "6572436f6e66696712422e676f6f676c652e636c6f75642e626967717565" .
            "72792e646174617472616e736665722e76312e5570646174655472616e73" .
            "666572436f6e666967526571756573741a352e676f6f676c652e636c6f75" .
            "642e62696771756572792e646174617472616e736665722e76312e547261" .
            "6e73666572436f6e66696722c70182d3e49302a20132432f76312f7b7472" .
            "616e736665725f636f6e6669672e6e616d653d70726f6a656374732f2a2f" .
            "6c6f636174696f6e732f2a2f7472616e73666572436f6e666967732f2a7d" .
            "3a0f7472616e736665725f636f6e6669675a4a32372f76312f7b7472616e" .
            "736665725f636f6e6669672e6e616d653d70726f6a656374732f2a2f7472" .
            "616e73666572436f6e666967732f2a7d3a0f7472616e736665725f636f6e" .
            "666967da411b7472616e736665725f636f6e6669672c7570646174655f6d" .
            "61736b12e1010a1444656c6574655472616e73666572436f6e6669671242" .
            "2e676f6f676c652e636c6f75642e62696771756572792e64617461747261" .
            "6e736665722e76312e44656c6574655472616e73666572436f6e66696752" .
            "6571756573741a162e676f6f676c652e70726f746f6275662e456d707479" .
            "226d82d3e49302602a332f76312f7b6e616d653d70726f6a656374732f2a" .
            "2f6c6f636174696f6e732f2a2f7472616e73666572436f6e666967732f2a" .
            "7d5a292a272f76312f7b6e616d653d70726f6a656374732f2a2f7472616e" .
            "73666572436f6e666967732f2a7dda41046e616d6512fa010a1147657454" .
            "72616e73666572436f6e666967123f2e676f6f676c652e636c6f75642e62" .
            "696771756572792e646174617472616e736665722e76312e476574547261" .
            "6e73666572436f6e666967526571756573741a352e676f6f676c652e636c" .
            "6f75642e62696771756572792e646174617472616e736665722e76312e54" .
            "72616e73666572436f6e666967226d82d3e493026012332f76312f7b6e61" .
            "6d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f7472616e" .
            "73666572436f6e666967732f2a7d5a2912272f76312f7b6e616d653d7072" .
            "6f6a656374732f2a2f7472616e73666572436f6e666967732f2a7dda4104" .
            "6e616d65128d020a134c6973745472616e73666572436f6e666967731241" .
            "2e676f6f676c652e636c6f75642e62696771756572792e64617461747261" .
            "6e736665722e76312e4c6973745472616e73666572436f6e666967735265" .
            "71756573741a422e676f6f676c652e636c6f75642e62696771756572792e" .
            "646174617472616e736665722e76312e4c6973745472616e73666572436f" .
            "6e66696773526573706f6e7365226f82d3e493026012332f76312f7b7061" .
            "72656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f74" .
            "72616e73666572436f6e666967735a2912272f76312f7b706172656e743d" .
            "70726f6a656374732f2a7d2f7472616e73666572436f6e66696773da4106" .
            "706172656e7412cd020a145363686564756c655472616e7366657252756e" .
            "7312422e676f6f676c652e636c6f75642e62696771756572792e64617461" .
            "7472616e736665722e76312e5363686564756c655472616e736665725275" .
            "6e73526571756573741a432e676f6f676c652e636c6f75642e6269677175" .
            "6572792e646174617472616e736665722e76312e5363686564756c655472" .
            "616e7366657252756e73526573706f6e736522ab0188020182d3e4930284" .
            "0122422f76312f7b706172656e743d70726f6a656374732f2a2f6c6f6361" .
            "74696f6e732f2a2f7472616e73666572436f6e666967732f2a7d3a736368" .
            "6564756c6552756e733a012a5a3b22362f76312f7b706172656e743d7072" .
            "6f6a656374732f2a2f7472616e73666572436f6e666967732f2a7d3a7363" .
            "686564756c6552756e733a012ada411a706172656e742c73746172745f74" .
            "696d652c656e645f74696d6512bc020a1753746172744d616e75616c5472" .
            "616e7366657252756e7312452e676f6f676c652e636c6f75642e62696771" .
            "756572792e646174617472616e736665722e76312e53746172744d616e75" .
            "616c5472616e7366657252756e73526571756573741a462e676f6f676c65" .
            "2e636c6f75642e62696771756572792e646174617472616e736665722e76" .
            "312e53746172744d616e75616c5472616e7366657252756e73526573706f" .
            "6e736522910182d3e493028a0122452f76312f7b706172656e743d70726f" .
            "6a656374732f2a2f6c6f636174696f6e732f2a2f7472616e73666572436f" .
            "6e666967732f2a7d3a73746172744d616e75616c52756e733a012a5a3e22" .
            "392f76312f7b706172656e743d70726f6a656374732f2a2f7472616e7366" .
            "6572436f6e666967732f2a7d3a73746172744d616e75616c52756e733a01" .
            "2a12ff010a0e4765745472616e7366657252756e123c2e676f6f676c652e" .
            "636c6f75642e62696771756572792e646174617472616e736665722e7631" .
            "2e4765745472616e7366657252756e526571756573741a322e676f6f676c" .
            "652e636c6f75642e62696771756572792e646174617472616e736665722e" .
            "76312e5472616e7366657252756e227b82d3e493026e123a2f76312f7b6e" .
            "616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f747261" .
            "6e73666572436f6e666967732f2a2f72756e732f2a7d5a30122e2f76312f" .
            "7b6e616d653d70726f6a656374732f2a2f7472616e73666572436f6e6669" .
            "67732f2a2f72756e732f2a7dda41046e616d6512e9010a1144656c657465" .
            "5472616e7366657252756e123f2e676f6f676c652e636c6f75642e626967" .
            "71756572792e646174617472616e736665722e76312e44656c6574655472" .
            "616e7366657252756e526571756573741a162e676f6f676c652e70726f74" .
            "6f6275662e456d707479227b82d3e493026e2a3a2f76312f7b6e616d653d" .
            "70726f6a656374732f2a2f6c6f636174696f6e732f2a2f7472616e736665" .
            "72436f6e666967732f2a2f72756e732f2a7d5a302a2e2f76312f7b6e616d" .
            "653d70726f6a656374732f2a2f7472616e73666572436f6e666967732f2a" .
            "2f72756e732f2a7dda41046e616d651292020a104c6973745472616e7366" .
            "657252756e73123e2e676f6f676c652e636c6f75642e6269677175657279" .
            "2e646174617472616e736665722e76312e4c6973745472616e7366657252" .
            "756e73526571756573741a3f2e676f6f676c652e636c6f75642e62696771" .
            "756572792e646174617472616e736665722e76312e4c6973745472616e73" .
            "66657252756e73526573706f6e7365227d82d3e493026e123a2f76312f7b" .
            "706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f" .
            "7472616e73666572436f6e666967732f2a7d2f72756e735a30122e2f7631" .
            "2f7b706172656e743d70726f6a656374732f2a2f7472616e73666572436f" .
            "6e666967732f2a7d2f72756e73da4106706172656e7412b2020a104c6973" .
            "745472616e736665724c6f6773123e2e676f6f676c652e636c6f75642e62" .
            "696771756572792e646174617472616e736665722e76312e4c6973745472" .
            "616e736665724c6f6773526571756573741a3f2e676f6f676c652e636c6f" .
            "75642e62696771756572792e646174617472616e736665722e76312e4c69" .
            "73745472616e736665724c6f6773526573706f6e7365229c0182d3e49302" .
            "8c0112492f76312f7b706172656e743d70726f6a656374732f2a2f6c6f63" .
            "6174696f6e732f2a2f7472616e73666572436f6e666967732f2a2f72756e" .
            "732f2a7d2f7472616e736665724c6f67735a3f123d2f76312f7b70617265" .
            "6e743d70726f6a656374732f2a2f7472616e73666572436f6e666967732f" .
            "2a2f72756e732f2a7d2f7472616e736665724c6f6773da4106706172656e" .
            "74129e020a0f436865636b56616c69644372656473123d2e676f6f676c65" .
            "2e636c6f75642e62696771756572792e646174617472616e736665722e76" .
            "312e436865636b56616c69644372656473526571756573741a3e2e676f6f" .
            "676c652e636c6f75642e62696771756572792e646174617472616e736665" .
            "722e76312e436865636b56616c69644372656473526573706f6e7365228b" .
            "0182d3e493027e223f2f76312f7b6e616d653d70726f6a656374732f2a2f" .
            "6c6f636174696f6e732f2a2f64617461536f75726365732f2a7d3a636865" .
            "636b56616c696443726564733a012a5a3822332f76312f7b6e616d653d70" .
            "726f6a656374732f2a2f64617461536f75726365732f2a7d3a636865636b" .
            "56616c696443726564733a012ada41046e616d651a57ca41236269677175" .
            "657279646174617472616e736665722e676f6f676c65617069732e636f6d" .
            "d2412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f" .
            "617574682f636c6f75642d706c6174666f726d428f020a29636f6d2e676f" .
            "6f676c652e636c6f75642e62696771756572792e646174617472616e7366" .
            "65722e76314211446174615472616e7366657250726f746f50015a51676f" .
            "6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c" .
            "65617069732f636c6f75642f62696771756572792f646174617472616e73" .
            "6665722f76313b646174617472616e73666572aa0225476f6f676c652e43" .
            "6c6f75642e42696751756572792e446174615472616e736665722e5631ca" .
            "0225476f6f676c655c436c6f75645c42696751756572795c446174615472" .
            "616e736665725c5631ea0229476f6f676c653a3a436c6f75643a3a426967" .
            "71756572793a3a446174615472616e736665723a3a5631620670726f746f" .
            "33"
        ), true);

        static::$is_initialized = true;
    }
}
