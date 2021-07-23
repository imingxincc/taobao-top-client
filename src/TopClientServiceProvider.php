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
            $taobaoConfig = $app->make('config')->get('taobao');
            $config = $taobaoConfig['connections'][$taobaoConfig['default']];
            return new TopClient($config);
        });

        $this->app->alias(TopClient::class, 'topClient');
    }

    public function provides()
    {
        return [TopClient::class, 'topClient'];
    }
}