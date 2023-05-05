<?php
/**
 * 思想：将原本实现的逻辑迁移到"工厂"概念下.
 * 让原本的实现去匹配实现一个工厂接口.
 *   
 * 工厂模式的实现:让子类实现工厂接口.
 *
 * 应用场景：
 * 复杂生成对象的场景.
 */
interface Factory
{
	public $property = 'factory';

	public function __construct()
	{
        
	}
}