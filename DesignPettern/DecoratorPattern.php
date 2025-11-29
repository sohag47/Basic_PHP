<?php

// Decorator Design Pattern in PHP


// -------------------------
// 1. Interface
// -------------------------
interface MessageInterface
{
    public function send($text);
}

// -------------------------
// 2. Base Concrete Class
// -------------------------
class BasicMessage implements MessageInterface
{
    public function send($text)
    {
        return $text;
    }
}


// -------------------------
// 3. Base Decorator Class
// -------------------------
class MessageDecorator implements MessageInterface
{
    protected $message;

    public function __construct(MessageInterface $message)
    {
        $this->message = $message;
    }

    public function send($text)
    {
        return $this->message->send($text);
    }
}


// -------------------------
// 4. Concrete Decorators
// -------------------------

// Add Timestamp
class TimestampDecorator extends MessageDecorator
{
    public function send($text)
    {
        $time = "[" . date('H:i:s') . "] ";
        return $time . parent::send($text);
    }
}


// Add Emoji
class EmojiDecorator extends MessageDecorator
{
    public function send($text)
    {
        return parent::send($text) . " 😊";
    }
}


// Add Username
class UsernameDecorator extends MessageDecorator
{
    private $username;

    public function __construct(MessageInterface $message, $username)
    {
        parent::__construct($message);
        $this->username = $username;
    }

    public function send($text)
    {
        return "@{$this->username}: " . parent::send($text);
    }
}


// -------------------------
// 5. Usage Example
// -------------------------

$message = new BasicMessage();

// Add timestamp
$message = new TimestampDecorator($message);

// Add username
$message = new UsernameDecorator($message, "CommanderSohag");

// Add emoji
$message = new EmojiDecorator($message);

// Final output
echo $message->send("Hello Bro");
