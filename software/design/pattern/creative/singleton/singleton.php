<?php
/**
 * 单例模式的实现
 * 1.保证只有一个实例对象.
 *     A:私有化__construct、__clone、__wakeup.
 * 2.全局访问点.
 *     A:写入static.
 *
 * 应用场景：
 * 控制类的创建和销毁,节约系统资源.
 */
class Singleton
{
	public $property = 'hello';

	private function __construct()
	{
        
	}

    /**
     * 获取一个类的实例.
     */
	public static function get_instance()
	{
		$instance = new Singleton();
        return $instance;
	}

    /**
     * 当使用clone关键字时，则会调起该魔术函数.
     */
	private function __clone()
	{
        $this->test = 'ssss';
	}

    /**
     * 单例下，设置类不能被反序列化.
     */
	private function __wakeup()
	{
        $this->test = 'ssss';
	}

	public function __sleep()
	{
        return $serialize = ['property'];
	}
}

$return = Singleton::get_instance();
$serialize = serialize($return);