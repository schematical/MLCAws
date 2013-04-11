<?php
abstract class MLCAwsInstanceOpts{
	const SecurityGroup = 'SecurityGroup';
	const InstanceType = 'InstanceType';
	const InstanceId = 'InstanceId';//FOR Querying only
	/*
	 * TODO: Add this shit
	 *  *	KeyName - _string_ (Optional) The name of the key pair.
	 *	SecurityGroup - _string_|_array_ (Optional) The names of the security groups into which the instances will be launched. Pass a string for a single value, or an indexed array for multiple values.
	 *	UserData - _string_ (Optional) Specifies additional information to make available to the instance(s).
	 *	InstanceType - _string_ (Optional) Specifies the instance type for the launched instances. [Allowed values: `t1.micro`, `m1.small`, `m1.large`, `m1.xlarge`, `m2.xlarge`, `m2.2xlarge`, `m2.4xlarge`, `c1.medium`, `c1.xlarge`, `cc1.4xlarge`, `cg1.4xlarge`]
	 *	Placement - _ComplexType_ (Optional) Specifies the placement constraints (Availability Zones) for launching the instances. A ComplexType is a set of key-value pairs. These pairs can be set one of two ways: by setting each individual `Placement` subtype (documented next), or by passing an associative array with the following `Placement`-prefixed entries as keys. See below for a list and a usage example.
	 *	Placement.AvailabilityZone - _string_ (Optional) The availability zone in which an Amazon EC2 instance runs.
	 *	Placement.GroupName - _string_ (Optional) The name of a PlacementGroup.
	 *	KernelId - _string_ (Optional) The ID of the kernel with which to launch the instance.
	 *	RamdiskId - _string_ (Optional) The ID of the RAM disk with which to launch the instance. Some kernels require additional drivers at launch. Check the kernel requirements for information on whether you need to specify a RAM disk. To find kernel requirements, go to the Resource Center and search for the kernel ID.
	 *	BlockDeviceMapping - _ComplexList_ (Optional)  A ComplexList is an indexed array of ComplexTypes. Each ComplexType is a set of key-value pairs. These pairs can be set one of two ways: by setting each individual `BlockDeviceMapping` subtype (documented next), or by passing an associative array with the following `BlockDeviceMapping`-prefixed entries as keys. In the descriptions below, `x`, `y` and `z` should be integers starting at `1`. See below for a list and a usage example.
	 *	BlockDeviceMapping.x.VirtualName - _string_ (Optional) Specifies the virtual device name.
	 *	BlockDeviceMapping.x.DeviceName - _string_ (Optional) Specifies the device name (e.g., /dev/sdh).
	 *	BlockDeviceMapping.x.Ebs.SnapshotId - _string_ (Optional) The ID of the snapshot from which the volume will be created.
	 *	BlockDeviceMapping.x.Ebs.VolumeSize - _integer_ (Optional) The size of the volume, in gigabytes.
	 *	BlockDeviceMapping.x.Ebs.DeleteOnTermination - _boolean_ (Optional) Specifies whether the Amazon EBS volume is deleted on instance termination.
	 *	BlockDeviceMapping.x.NoDevice - _string_ (Optional) Specifies the device name to suppress during instance launch.
	 *	Monitoring.Enabled - _boolean_ (Optional) Enables monitoring for the instance.
	 *	SubnetId - _string_ (Optional) Specifies the subnet ID within which to launch the instance(s) for Amazon Virtual Private Cloud.
	 *	DisableApiTermination - _boolean_ (Optional) Specifies whether the instance can be terminated using the APIs. You must modify this attribute before you can terminate any "locked" instances from the APIs.
	 *	InstanceInitiatedShutdownBehavior - _string_ (Optional) Specifies whether the instance's Amazon EBS volumes are stopped or terminated when the instance is shut down.
	 *	License - _ComplexType_ (Optional) Specifies active licenses in use and attached to an Amazon EC2 instance. A ComplexType is a set of key-value pairs. These pairs can be set one of two ways: by setting each individual `License` subtype (documented next), or by passing an associative array with the following `License`-prefixed entries as keys. See below for a list and a usage example.
	 *	License.Pool - _string_ (Optional) The license pool from which to take a license when starting Amazon EC2 instances in the associated `RunInstances` request.
	 *	PrivateIpAddress - _string_ (Optional) If you're using Amazon Virtual Private Cloud, you can optionally use this parameter to assign the instance a specific available IP address from the subnet.
	 *	ClientToken - _string_ (Optional) Unique, case-sensitive identifier you provide to ensure idempotency of the request. For more information, go to How to Ensure Idempotency in the Amazon Elastic Compute Cloud User Guide.
	 *	AdditionalInfo - _string_ (Optional) For internal use only.
	 *	returnCurlHandle - _boolean_ (Optional) A private toggle specifying that the cURL handle be returned rather than actually completing the request. This toggle is useful for manually managed batch requests.
	 *
	 */
}
