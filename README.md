# laravel-debuger

## Installation

~~~bash
composer require huangdijia/laravel-debuger
~~~

## Usage

引用

~~~php
use Huangdijia\Debuger\Facades\Debuger;
~~~

~~~php
Debuger::remark('begin');
// do something
Debuger::remark('end');
// 统计
echo Debuger::getRangeTime('begin','end').'s';
~~~

表示统计`begin`位置到`end`位置的执行时间（单位是秒），`begin`必须是一个已经标记过的位置，如果这个时候`end`位置还没被标记过，则会自动把当前位置标记为`end`标签，输出的结果类似于：`0.0056s`

默认的统计精度是小数点后4位，如果觉得这个统计精度不够，还可以设置例如：

~~~php
echo Debuger::getRangeTime('begin','end',6).'s';
~~~

可能的输出会变成：`0.005587s`

如果你的环境支持内存占用统计的话，还可以使用`getRangeMem`方法进行区间内存开销统计`（单位为kb）`，例如：

~~~php
echo Debuger::getRangeMem('begin','end').'kb';
~~~

第三个参数使用m表示进行内存开销统计，输出的结果可能是：`625kb`

同样，如果`end`标签没有被标记的话，会自动把当前位置先标记位`end`标签。

助手函数
系统还提供了助手函数`debug`用于完成相同的作用，上面的代码可以改成：

~~~php
debug('begin');
// do somethings
debug('end');
// 统计
echo debug('begin','end').'s';
echo debug('begin','end',6).'s';
echo debug('begin','end','m').'kb';
~~~

## 感谢

https://www.kancloud.cn/manual/thinkphp5_1/354097