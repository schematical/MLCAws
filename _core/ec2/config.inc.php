<?php if (!class_exists('CFRuntime')) die('No direct access allowed.');
/**
 * NOTE FROM MATT LEA: I Moved all of this in to /includes/config/MFB.inc.php
 */


/**
 * File: Configuration
 * 	Stores your AWS account information. Add your account information, and then rename this file to 'config.inc.php'.
 *
 * Version:
 * 	2010.09.30
 *
 * License and Copyright:
 * 	See the included NOTICE.md file for more information.
 *
 * See Also:
 * 	[PHP Developer Center](http://aws.amazon.com/php/)
 * 	[AWS Security Credentials](http://aws.amazon.com/security-credentials)
 */


/**
 * Constant: AWS_KEY
 * 	Amazon Web Services Key. Found in the AWS Security Credentials. You can also pass this value as the first parameter to a service constructor.
 */
//define('AWS_KEY', 'AKIAJREF2K7BKTA6ZG4A');

/**
 * Constant: AWS_SECRET_KEY
 * 	Amazon Web Services Secret Key. Found in the AWS Security Credentials. You can also pass this value as the second parameter to a service constructor.
 */
//define('AWS_SECRET_KEY', '6ppbA8j1Pa1lz7VrQcZq+jpsUOkUc2qJT3GOWpsU');

/**
 * Constant: AWS_ACCOUNT_ID
 * 	Amazon Account ID without dashes. Used for identification with Amazon EC2. Found in the AWS Security Credentials.
 */
//define('AWS_ACCOUNT_ID', '	819221674159');

/**
 * Constant: AWS_CANONICAL_ID
 * 	Your CanonicalUser ID. Used for setting access control settings in AmazonS3. Found in the AWS Security Credentials.
 */
//define('AWS_CANONICAL_ID', '087bf6ad9af1a4ebda38798325c42ff2b7bcbfd0f466ad8043b8b8b1738aa885');

/**
 * Constant: AWS_CANONICAL_NAME
 * 	Your CanonicalUser DisplayName. Used for setting access control settings in AmazonS3. Found in the AWS Security Credentials (i.e. "Welcome, AWS_CANONICAL_NAME").
 */
//define('AWS_CANONICAL_NAME', 'Matt lea');

/**
 * Constant: AWS_MFA_SERIAL
 * 	12-digit serial number taken from the Gemalto device used for Multi-Factor Authentication. Ignore this if you're not using MFA.
 */
define('AWS_MFA_SERIAL', '');

/**
 * Constant: AWS_CLOUDFRONT_KEYPAIR_ID
 * 	Amazon CloudFront key-pair to use for signing private URLs. Found in the AWS Security Credentials. This can be set programmatically with AmazonCloudFront::set_keypair_id().
 */
define('AWS_CLOUDFRONT_KEYPAIR_ID', '');

/**
 * Constant: AWS_PRIVATE_KEY_PEM
 * 	The contents of the *.pem private key that matches with the CloudFront key-pair ID. Found in the AWS Security Credentials. This can be set programmatically with AmazonCloudFront::set_private_key().
 */
define('AWS_CLOUDFRONT_PRIVATE_KEY_PEM', '');

/**
 * Constant: AWS_ENABLE_EXTENSIONS
 * 	Set the value to true to enable autoloading for classes not prefixed with "Amazon" or "CF". If enabled, load sdk.class.php last to avoid clobbering any other autoloaders.
 */
define('AWS_ENABLE_EXTENSIONS', 'false');

