<?php
class Smsglobal_RestApiClient_Resource_Proxy_CampaignProxy extends Smsglobal_RestApiClient_Resource_Campaign
{
    private $rest;
    public function __construct($resourceUri, Smsglobal_RestApiClient_RestApiClient $rest)
    {
        $this->resourceUri = $resourceUri;
        $this->rest = $rest;
        $this->id = substr($resourceUri, 0, -1);
        $this->id = (int) substr($this->id, (strrpos('/', $this->id) + 1), (-1));
    }
    private function load()
    {
        if (isset($this->rest)) {
            $options = $this->rest->get($this->getResourceName(), $this->id);
            $this->setOptions($options);
            unset($this->rest);
        }
    }
    public function getCustomId()
    {
        $this->load();
        return parent::getCustomId();
    }
    public function getDateTime()
    {
        $this->load();
        return parent::getDateTime();
    }
    public function getDateTimeScheduled()
    {
        $this->load();
        return parent::getDateTimeScheduled();
    }
    public function getGroup()
    {
        $this->load();
        return parent::getGroup();
    }
    public function getMessage()
    {
        $this->load();
        return parent::getMessage();
    }
    public function getName()
    {
        $this->load();
        return parent::getName();
    }
    public function getOrigin()
    {
        $this->load();
        return parent::getOrigin();
    }
    public function getStaggerBatchSize()
    {
        $this->load();
        return parent::getStaggerBatchSize();
    }
    public function getStaggerEndTime()
    {
        $this->load();
        return parent::getStaggerEndTime();
    }
    public function getStaggerGap()
    {
        $this->load();
        return parent::getStaggerGap();
    }
    public function getStaggerStartTime()
    {
        $this->load();
        return parent::getStaggerStartTime();
    }
}