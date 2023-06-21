<?php

declare(strict_types=1);

namespace src\Api\Messages;

trait SendMediaApi
{
    abstract public function get(string $uri, array $query = []): array;

    /**
     * @see https://core.tlgr.org/bots/api#sendphoto
     */
    public function sendPhoto(array $request): array
    {
        return $this->get('sendPhoto', $request);
    }

    /**
     * @see https://core.tlgr.org/bots/api#sendaudio
     */
    public function sendAudio(array $request): array
    {
        return $this->get('sendAudio', $request);
    }

    /**
     * @see https://core.tlgr.org/bots/api#senddocument
     */
    public function sendDocument(array $request): array
    {
        return $this->get('sendDocument', $request);
    }

    /**
     * @see https://core.tlgr.org/bots/api#sendphotovideo
     */
    public function sendVideo(array $request): array
    {
        return $this->get('sendVideo', $request);
    }

    /**
     * @see https://core.tlgr.org/bots/api#sendanimation
     */
    public function sendAnimation(array $request): array
    {
        return $this->get('sendAnimation', $request);
    }

    /**
     * @see https://core.tlgr.org/bots/api#sendvoice
     */
    public function sendVoice(array $request): array
    {
        return $this->get('sendVoice', $request);
    }

    /**
     * @see https://core.tlgr.org/bots/api#sendvideonote
     */
    public function sendVideoNote(array $request): array
    {
        return $this->get('sendVideoNote', $request);
    }

    /**
     * @see https://core.tlgr.org/bots/api#sendmediagroup
     */
    public function sendMediaGroup(array $request): array
    {
        return $this->get('sendMediaGroup', $request);
    }

    /**
     * @see https://core.tlgr.org/bots/api#sendlocation
     */
    public function sendLocation(array $request): array
    {
        return $this->get('sendLocation', $request);
    }

    /**
     * @see https://core.tlgr.org/bots/api#sendvenue
     */
    public function sendVenue(array $request): array
    {
        return $this->get('sendVenue', $request);
    }

    /**
     * @see https://core.tlgr.org/bots/api#sendcontact
     */
    public function sendContact(array $request): array
    {
        return $this->get('sendContact', $request);
    }

    /**
     * @see https://core.tlgr.org/bots/api#sendpoll
     */
    public function sendPoll(array $request): array
    {
        return $this->get('sendPoll', $request);
    }

    /**
     * @see https://core.tlgr.org/bots/api#senddice
     */
    public function sendDice(array $request): array
    {
        return $this->get('sendDice', $request);
    }

    /**
     * @see https://core.tlgr.org/bots/api#sendchataction
     */
    public function sendChatAction(array $request): array
    {
        return $this->get('sendChatAction', $request);
    }
}