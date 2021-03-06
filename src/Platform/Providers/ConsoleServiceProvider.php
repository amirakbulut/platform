<?php

declare(strict_types=1);

namespace Orchid\Platform\Providers;

use Illuminate\Support\ServiceProvider;
use Orchid\Platform\Commands\LinkCommand;
use Orchid\Platform\Commands\RowsCommand;
use Orchid\Platform\Commands\AdminCommand;
use Orchid\Platform\Commands\ChartCommand;
use Orchid\Platform\Commands\TableCommand;
use Orchid\Platform\Commands\FilterCommand;
use Orchid\Platform\Commands\ScreenCommand;
use Orchid\Platform\Commands\InstallCommand;
use Orchid\Platform\Commands\MetricsCommand;
use Orchid\Platform\Commands\SelectionCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    /**
     * The available command shortname.
     *
     * @var array
     */
    protected $commands = [
        InstallCommand::class,
        AdminCommand::class,
        FilterCommand::class,
        LinkCommand::class,
        RowsCommand::class,
        ScreenCommand::class,
        TableCommand::class,
        ChartCommand::class,
        MetricsCommand::class,
        SelectionCommand::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        foreach ($this->commands as $command) {
            $this->commands($command);
        }
    }
}
