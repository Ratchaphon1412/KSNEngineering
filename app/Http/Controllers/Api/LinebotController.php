<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LINE\Clients\MessagingApi\Model\ReplyMessageRequest;
use LINE\Clients\MessagingApi\Model\StickerMessage;
use LINE\Clients\MessagingApi\Model\TextMessage;
use LINE\Clients\MessagingApi\Model\ImageMessage;
use LINE\Constants\HTTPHeader;
use LINE\Parser\EventRequestParser;

use LINE\Parser\Exception\InvalidEventRequestException;
use LINE\Parser\Exception\InvalidSignatureException;
use LINE\Webhook\Model\StickerMessageContent;
use LINE\Webhook\Model\TextMessageContent;

class LinebotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
                // $signature = $request->header(HTTPHeader::LINE_SIGNATURE);
        // if (empty($signature)) {
        //     return response('Bad Request', 400);
        // }

        $signature = $request->header(HTTPHeader::LINE_SIGNATURE);
        if (empty($signature)) {
            return response('Bad Request', 400);
        }
        $client = new \GuzzleHttp\Client();
        $config = new \LINE\Clients\MessagingApi\Configuration();
        $config->setAccessToken(config('line-bot.channel_access_token'));

        $messagingApi = new \LINE\Clients\MessagingApi\Api\MessagingApiApi(
            client: $client,
            config: $config,
        );

        try {
            $secret = config('line-bot.channel_secret');
            $parsedEvents = EventRequestParser::parseEventRequest($request->getContent(), $secret, $signature);
        } catch (InvalidSignatureException $e) {
            return response('Invalid signature', 400);
        } catch (InvalidEventRequestException $e) {
            return response("Invalid event request", 400);
        }

        foreach ($parsedEvents->getEvents() as $event) {

            $message = $event->getMessage();

            $replyText = $message->getText();
            if($message instanceof TextMessageContent){
                
                if ($replyText === "world") {
                    $messagingApi->replyMessage(new ReplyMessageRequest([
                        'replyToken' => $event->getReplyToken(),
                        'messages' => [
                            (new TextMessage(['text' => "hello", 'type' => 'text'])),
                        ],
                    ]));
                }
                else if($replyText === "hello"){
                    $messagingApi->replyMessage(new ReplyMessageRequest([
                        'replyToken' => $event->getReplyToken(),
                        'messages' => [
                            (new TextMessage(['text' => "world", 'type' => 'text'])),
                        ],
                    ]));
                }
                else if($replyText === "image"){
                    $messagingApi->replyMessage(new ReplyMessageRequest([
                        'replyToken' => $event->getReplyToken(),
                        'messages' => [
                            (new ImageMessage([
                                "type" => "image",
                                "originalContentUrl" => "https://plus.unsplash.com/premium_photo-1695054405302-82ce0cda5111?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2772&q=80",
                                "previewImageUrl" => "https://plus.unsplash.com/premium_photo-1695054405302-82ce0cda5111?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2772&q=80"
                            ])),
                        ],
                    ]));
                }
                else{
                    $messagingApi->replyMessage(new ReplyMessageRequest([
                        'replyToken' => $event->getReplyToken(),
                        'messages' => [
                            (new TextMessage(['text' => "ไม่เข้าใครคำถามที่ต้องการจะสื่อ", 'type' => 'text'])),
                        ],
                    ]));
                }   
            }else if($message instanceof StickerMessageContent){
                $messagingApi->replyMessage(new ReplyMessageRequest([
                    'replyToken' => $event->getReplyToken(),
                    'messages' => [
                        (new StickerMessage([
                            'packageId' => "446",
                            "stickerId" => "1988", 
                            'type' => 'sticker'
                        ])),
                    ],
                ]));
            }else {
                $messagingApi->replyMessage(new ReplyMessageRequest([
                    'replyToken' => $event->getReplyToken(),
                    'messages' => [
                        (new TextMessage(['text' => "-----", 'type' => 'text'])),
                    ],
                ]));
            }
        }
        return response([], 200);
    }
}
