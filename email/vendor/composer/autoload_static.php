<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit988f4ec69f2872ee01d3d9c85d0115cc
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Masterminds\\' => 12,
        ),
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Masterminds\\' => 
        array (
            0 => __DIR__ . '/..' . '/masterminds/html5/src',
        ),
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qr-code/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Roundcube\\Composer' => 
            array (
                0 => __DIR__ . '/..' . '/roundcube/plugin-installer/src',
            ),
        ),
        'N' => 
        array (
            'Net' => 
            array (
                0 => __DIR__ . '/..' . '/pear/net_idna2',
                1 => __DIR__ . '/..' . '/pear/net_smtp',
                2 => __DIR__ . '/..' . '/pear/net_socket',
            ),
        ),
        'M' => 
        array (
            'Mail' => 
            array (
                0 => __DIR__ . '/..' . '/pear/mail_mime',
            ),
        ),
        'C' => 
        array (
            'Console' => 
            array (
                0 => __DIR__ . '/..' . '/pear/console_commandline',
                1 => __DIR__ . '/..' . '/pear/console_getopt',
            ),
        ),
        'A' => 
        array (
            'Auth' => 
            array (
                0 => __DIR__ . '/..' . '/pear/auth_sasl',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/..' . '/pear/pear-core-minimal/src',
    );

    public static $classMap = array (
        'Crypt_GPG' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG.php',
        'Crypt_GPGAbstract' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPGAbstract.php',
        'Crypt_GPG_BadPassphraseException' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/Exceptions.php',
        'Crypt_GPG_DeletePrivateKeyException' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/Exceptions.php',
        'Crypt_GPG_Engine' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/Engine.php',
        'Crypt_GPG_Exception' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/Exceptions.php',
        'Crypt_GPG_FileException' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/Exceptions.php',
        'Crypt_GPG_InvalidKeyParamsException' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/Exceptions.php',
        'Crypt_GPG_InvalidOperationException' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/Exceptions.php',
        'Crypt_GPG_Key' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/Key.php',
        'Crypt_GPG_KeyGenerator' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/KeyGenerator.php',
        'Crypt_GPG_KeyNotCreatedException' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/Exceptions.php',
        'Crypt_GPG_KeyNotFoundException' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/Exceptions.php',
        'Crypt_GPG_NoDataException' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/Exceptions.php',
        'Crypt_GPG_OpenSubprocessException' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/Exceptions.php',
        'Crypt_GPG_PinEntry' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/PinEntry.php',
        'Crypt_GPG_ProcessControl' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/ProcessControl.php',
        'Crypt_GPG_ProcessHandler' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/ProcessHandler.php',
        'Crypt_GPG_Signature' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/Signature.php',
        'Crypt_GPG_SignatureCreationInfo' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/SignatureCreationInfo.php',
        'Crypt_GPG_SubKey' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/SubKey.php',
        'Crypt_GPG_UserId' => __DIR__ . '/..' . '/pear/crypt_gpg/Crypt/GPG/UserId.php',
        'Net_LDAP2' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2.php',
        'Net_LDAP2_Entry' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/Entry.php',
        'Net_LDAP2_Error' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2.php',
        'Net_LDAP2_Filter' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/Filter.php',
        'Net_LDAP2_LDIF' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/LDIF.php',
        'Net_LDAP2_RootDSE' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/RootDSE.php',
        'Net_LDAP2_Schema' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/Schema.php',
        'Net_LDAP2_SchemaCache' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/SchemaCache.interface.php',
        'Net_LDAP2_Search' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/Search.php',
        'Net_LDAP2_SimpleFileSchemaCache' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/SimpleFileSchemaCache.php',
        'Net_LDAP2_Util' => __DIR__ . '/..' . '/pear/net_ldap2/Net/LDAP2/Util.php',
        'Net_LDAP3' => __DIR__ . '/..' . '/kolab/net_ldap3/lib/Net/LDAP3.php',
        'Net_LDAP3_Result' => __DIR__ . '/..' . '/kolab/net_ldap3/lib/Net/LDAP3/Result.php',
        'Net_Sieve' => __DIR__ . '/..' . '/pear/net_sieve/Sieve.php',
        'PEAR_Exception' => __DIR__ . '/..' . '/pear/pear_exception/PEAR/Exception.php',
        'SieveTest' => __DIR__ . '/..' . '/pear/net_sieve/tests/SieveTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit988f4ec69f2872ee01d3d9c85d0115cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit988f4ec69f2872ee01d3d9c85d0115cc::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit988f4ec69f2872ee01d3d9c85d0115cc::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInit988f4ec69f2872ee01d3d9c85d0115cc::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInit988f4ec69f2872ee01d3d9c85d0115cc::$classMap;

        }, null, ClassLoader::class);
    }
}
