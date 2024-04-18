<?php

// Unset the first parameter, `<file>.php`.
array_shift($argv);

$flag = null;
$params = [];

/**
 * Filter and sort incoming parameters.
 */
foreach ($argv as $param)
{
	if ($param === '')
	{
		exit('Invalid parameter, an empty string is not allowed. Exiting script...' . PHP_EOL);
	} else
	if ($param[0] === '-')
	{
		$flag = catchShortFlag($param);
	} else
	if (strlen($param) > 0)
	{
		$params[] = catchParameter($param);
	}
}

/**
 * Evaluate parameter legitimaty as a flag.
 * @param string $flag
 * @return string
 */
function catchShortFlag(string $flag): string
{
	if (strlen($flag) < 2)
	{
		exit('Invalid flag, a character should be supplied. Exiting script...' . PHP_EOL);
	} else
	if (strlen($flag) === 2 && $flag[1] === '-')
	{
		exit('Invalid flag, long flags are currently not supported. Exiting script...' . PHP_EOL);
	} else
	if (strlen($flag) > 2)
	{
		exit('Invalid flag, should be only one character long. Exiting script...' . PHP_EOL);
	} else
	if (is_numeric($flag[1]))
	{
		exit('Invalid flag, numeric characters are not supported. Exiting script...' . PHP_EOL);
	}

	return $flag[1];
}

/**
 * Proces parameter value.
 * @param string $param
 * @return string
 */
function catchParameter(string $param): string
{
	return $param;
}

print 'flag:   ' . $flag . PHP_EOL;

print 'params: ';
foreach ($params as $param)
{
	print $param . ' ';
}
print PHP_EOL;
