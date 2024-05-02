<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Bluerhinos\phpMQTT;

class MQTTListener extends Command
{
    protected $signature = 'mqtt:listen';
    protected $description = 'Listen for MQTT messages';

    public function handle()
    {
        $mqtt = new phpMQTT("localhost", 1883, "ClientId");

        if (!$mqtt->connect()) {
            $this->error('Failed to connect to MQTT broker');
            return;
        }

        $this->info('Connected to MQTT broker');

        // Subscribe to a topic
        $mqtt->subscribe("topic", 0);

        // Loop to handle messages
        while ($mqtt->proc()) {
            // Handle messages here
        }

        $mqtt->close();
    }
}
