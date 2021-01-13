<?php

namespace Javck\Ezlaravel\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Process\Process;
use Javck\Ezlaravel\EzlaravelServiceProvider;

class RepublishCommand extends Command
{


    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'ezlaravel:republish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '重新部署 Ezlaravel 檔案';

    protected function getOptions()
    {
        return [
            ['force', null, InputOption::VALUE_NONE, '強迫此操作能在正式環境執行', null]
        ];
    }

    /**
     * Get the composer command for the environment.
     *
     * @return string
     */
    protected function findComposer()
    {
        if (file_exists(getcwd() . '/composer.phar')) {
            return '"' . PHP_BINARY . '" ' . getcwd() . '/composer.phar';
        }

        return 'composer';
    }

    public function fire(Filesystem $filesystem)
    {
        return $this->handle($filesystem);
    }

    /**
     * Execute the console command.
     *
     * @param \Illuminate\Filesystem\Filesystem $filesystem
     *
     * @return void
     */
    public function handle(Filesystem $filesystem)
    {
        $this->info('出版Ezlaravel素材資源,資料庫,設定,視圖以及程式檔案');

        $this->call('vendor:publish', ['--force' => true, '--provider' => EzlaravelServiceProvider::class]);

        $this->info('Dumping the autoloaded files and reloading all new files');

        $composer = $this->findComposer();

        $process = new Process([$composer . ' dump-autoload']);
        $process->setTimeout(null); // Setting timeout to null to prevent installation from stopping at a certain point in time
        $process->setWorkingDirectory(base_path())->run();

        $this->info('成功重新佈署Ezlaravel檔案，祝您學習愉快!');
    }
}
