<?php

namespace AsyncAws\Lambda\Enum;

/**
 * The reason code for the last update that was performed on the function.
 */
final class LastUpdateStatusReasonCode
{
    public const ENI_LIMIT_EXCEEDED = 'EniLimitExceeded';
    public const IMAGE_ACCESS_DENIED = 'ImageAccessDenied';
    public const IMAGE_DELETED = 'ImageDeleted';
    public const INSUFFICIENT_ROLE_PERMISSIONS = 'InsufficientRolePermissions';
    public const INTERNAL_ERROR = 'InternalError';
    public const INVALID_CONFIGURATION = 'InvalidConfiguration';
    public const INVALID_IMAGE = 'InvalidImage';
    public const INVALID_SECURITY_GROUP = 'InvalidSecurityGroup';
    public const INVALID_SUBNET = 'InvalidSubnet';
    public const SUBNET_OUT_OF_IPADDRESSES = 'SubnetOutOfIPAddresses';

    public static function exists(string $value): bool
    {
        return isset([
            self::ENI_LIMIT_EXCEEDED => true,
            self::IMAGE_ACCESS_DENIED => true,
            self::IMAGE_DELETED => true,
            self::INSUFFICIENT_ROLE_PERMISSIONS => true,
            self::INTERNAL_ERROR => true,
            self::INVALID_CONFIGURATION => true,
            self::INVALID_IMAGE => true,
            self::INVALID_SECURITY_GROUP => true,
            self::INVALID_SUBNET => true,
            self::SUBNET_OUT_OF_IPADDRESSES => true,
        ][$value]);
    }
}
