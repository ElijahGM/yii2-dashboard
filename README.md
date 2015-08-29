Getting started with Yii2-dashboard
=========
Yii2 Dashboard is a module that allows you to create and manage admin dashboards using custom layouts and panels.



Installation
------------
Yii2-dashboard is designed to work out of the box. It means that installation requires
minimal steps. Only one configuration step should be taken and you are ready to
have a dynamic dashboard on your Yii2 website.

### 1. Download
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist esoftslimited/yii2-dashboard "*"
```

or add

```
"esoftslimited/yii2-dashboard": "*"
```

to the require section of your `composer.json` file.


Usage
-----
### 2. Configure

Add following lines to your main configuration file:
> **NOTE:** Make sure that you don't have `dashboard` component or `module` configuration in your config files. otherwise this step will override it

```php
'modules' => [
    'dashboard' => [
        'class' => 'esoftslimited\dashboard\Module',
    ],
],
```
## Where do I go now?
You have Yii2-dashboard installed. Now you can start adding panels on to your dashboard using this method
```php
\Yii::$app->dashboard->addPanel($name,$view,$section);
```
The addPanel() function accepts 3 parameters

```php
$name; /** name of the panel **/
$view; /** content of the panel **/
$section; /** section where the panel will be displayed**/
```
> **NOTE:** You can add as many panel as you wish

## Playing around with layouts?
The dashboard component allows custom layouts using the following function
```php
\Yii::$app->dashboard->setLayout(String $layout);
```
## Displaying The panels?
On your admin/dashboad view invoke 
```php
\Yii::$app->dashboard->display;
```
to display your panels
## Full Example?
On your dashboard view add the following

```php
    $layout='<div class="row"><div class="col-md-8">{stats}</div> <div class="col-md-4">{test2}</div></div></div>';
   \Yii::$app->dashboard->setLayout($layout);
   \Yii::$app->dashboard->addPanel('{stats}',$testView);
   \Yii::$app->dashboard->addPanel('test2','<dic class="row">Example</div>');
   //\Yii::$app->dashboard->addPanel('test3','View3','left');
   \Yii::$app->dashboard->display;
```
## What next after this? (Our Roadmap)
The module is still on dev we are hoping to achieve a dynamic easy to use plugin 

1. Add module hooks,where modules will be able to 'inject' thier panels to the dashboard on-the-fly
2. Allow using [yii\widgets\Block](http://www.yiiframework.com/doc-2.0/yii-widgets-block.html) on layouts
3. Utilize cache for enhacing performace
4. Add hooks for allowing draggable and saving user settings to the database
5. Add many useful functions on dashboard component;
6. Design default module for diplaying dashboard that is flexible and extensible
7. Organize this ToDo in order of priority
8. Relax and develop

