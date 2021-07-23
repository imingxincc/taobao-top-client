<?php
namespace Imingxin\TaobaoTopClient;

class TopClientServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                realpath(__DIR__.'/../config/taobao.php') => config_path('taobao.php'),
            ]);
        }
    }

    public function register()
    {
        $this->app->singleton(TopClient::class, function($app) {
            // $config = $app->make('config')->get('taobao');
            $name = $app['config']['taobao.default'];
            $config = $app['config']["taobao.connections.{$name}"];
            $obj = new TopClient($config['app_key'], $config['app_secret']);
            $obj->format = $config['format'] ?? 'json';
            return $obj;
        });

        $this->app->alias(TopClient::class, 'topClient');
    }

    public function provides()
    {
        return [TopClient::class, 'topClient'];
    }
}