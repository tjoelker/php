<?php

class ParentClass
{
	public int $id = 0;

	public function publicMethod(): string
	{
		return 'Public function return value';
	}

	static function staticMethod(): string
	{
		return 'Static function return value';
	}
}

class ChildClass extends ParentClass
{
	public int $id = 1;
}
