<?php


namespace OpenData\PacketHandlers;

class Analytics extends SignaturesBase {

    public function __construct($files) {
        parent::__construct($files);
    }

    public function getPacketType() {
        return 'analytics';
    }

    public function getJsonSchema() {
        return 'analytics.json';
    }
}
