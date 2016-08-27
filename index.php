<?php
/*
    方倍工作室 http://www.cnblogs.com/txw1958/
    CopyRight 2013 www.doucube.com  All Rights Reserved
*/

define("TOKEN", "weixin");
$wechatObj = new wechatCallbackapiTest();
if (isset($_GET['echostr'])) {
    $wechatObj->valid();
}else{
    $wechatObj->responseMsg();
}

class wechatCallbackapiTest
{
    public function valid()
    {
        $echoStr = $_GET["echostr"];
        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }

    private function checkSignature()
    {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];

        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }

    public function responseMsg()
    {
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

        if (!empty($postStr)){
            $this->logger("R ".$postStr);
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $RX_TYPE = trim($postObj->MsgType);

            $fromUsername = $postObj->FromUserName;
            $toUsername = $postObj->ToUserName;
            $keyword = trim($postObj->Content);
            $textTpl = "<xml>
                        <ToUserName><![CDATA[%s]]></ToUserName>
                        <FromUserName><![CDATA[%s]]></FromUserName>
                        <CreateTime>%s</CreateTime>
                        <MsgType><![CDATA[%s]]></MsgType>
                        <Content><![CDATA[%s]]></Content>
                        <FuncFlag>0</FuncFlag>
                        </xml>";
			
            switch ($keyword)
			{
				case "?":
				{
					$msgType = "text";
					$contentStr = "欢迎使用波仔机器人，能为您效劳吗？想体验ZYBO为您带来的惊喜，请输入如下问题:\r“你是谁”\r“你家在哪”\r“你会干啥”\r“你的格言是”\r“你是男是女”\r“你爸是谁”\r“你妈是谁”\r“你有对象么”\r“你多大了”\r“你吃饭了吗”\r“你有好朋友吗”\r“你的理想是什么”\r回复城市名还能自动预报天气，如”太仓“……";
					$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
					echo $resultStr;
					break;
				}
				case "？":
				{
					$msgType = "text";
					$contentStr = "HelloHuster";
					$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
					echo $resultStr;
					break;
				}
				case "你是谁":
				{
					$msgType = "text";
					$contentStr = "我的英文名叫ZYBO，中文名叫波仔，黄海波的波，华仔的仔哦~~";
					$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
					echo $resultStr;
					break;
				}			
				case "你家在哪":
				{
					$msgType = "text";
					$contentStr = "我的家在东北，松花江上…… 嘿嘿，开个玩笑，我的家在美丽的太仓";
					$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
					echo $resultStr;
					break;
				}			
				case "你会干啥":
				{
					$msgType = "text";
					$contentStr = "我会回答一些简单的问题，还能预报天气";
					$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
					echo $resultStr;
					break;
				}			
				case "你的格言是":
				{
					$msgType = "text";
					$contentStr = "No zuo no die，不作死就不会死";
					$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
					echo $resultStr;
					break;
				}			
				case "你是男是女":
				{
					$msgType = "text";
					$contentStr = "我没有性别";
					$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
					echo $resultStr;
					break;
				}
				case "你爸是谁":
				{
					$msgType = "text";
					$contentStr = "F***k，嗯，其实我想说Frank";
					$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
					echo $resultStr;
					break;
				}
				case "你妈是谁":
				{
					$msgType = "text";
					$contentStr = "问我爸去";
					$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
					echo $resultStr;
					break;
				}			
				case "你有对象么":
				{
					$msgType = "text";
					$contentStr = "我还小，不适合谈恋爱";
					$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
					echo $resultStr;
					break;
				}
				case "你多大了":
				{
					$msgType = "text";
					$contentStr = "截止到今天，我已经有YY-MM-DD了";
					$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
					echo $resultStr;
					break;
				}
				case "你吃饭了吗":
				{
					$msgType = "text";
					$contentStr = "我还不饿，饿了的时候，我会用几节AAA电池充饥";
					$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
					echo $resultStr;
					break;
				}
				case "你有好朋友吗":
				{
					$msgType = "text";
					$contentStr = "Zedboard，Nexys4，Anvyl都是我的小伙伴，当他们看到我能跑微信时，小伙伴们都惊呆了";
					$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
					echo $resultStr;
					break;
				}
				case "你的理想是什么":
				{
					$msgType = "text";
					$contentStr = "能送我一部最新版的iPhoneX吗？";
					$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
					echo $resultStr;
					break;
				}
			}
		    switch ($RX_TYPE)
            {
                case "event":
                    $result = $this->receiveEvent($postObj);
                    break;
                case "text":
                    $result = $this->receiveText($postObj);
                    break;
            }
			$this->logger("T ".$result);
            echo $result;
        }else{
            echo "";
            exit;
        }
    }
	
    private function receiveText($object)
    {
        $keyword = trim($object->Content);$url = "http://apix.sinaapp.com/weather/?appkey=".$object->ToUserName."&city=".urlencode($keyword); 
        $output = file_get_contents($url);
        $content = json_decode($output, true);

        $result = $this->transmitNews($object, $content);
        return $result;
    }	

    private function transmitText($object, $content)
    {
        $textTpl = "<xml>
					<ToUserName><![CDATA[%s]]></ToUserName>
					<FromUserName><![CDATA[%s]]></FromUserName>
					<CreateTime>%s</CreateTime>
					<MsgType><![CDATA[text]]></MsgType>
					<Content><![CDATA[%s]]></Content>
					</xml>";
        $result = sprintf($textTpl, $object->FromUserName, $object->ToUserName, time(), $content);
        return $result;
    }

    private function transmitNews($object, $newsArray)
    {
        if(!is_array($newsArray)){
            return;
        }
        $itemTpl = "<item>
					<Title><![CDATA[%s]]></Title>
					<Description><![CDATA[%s]]></Description>
					<PicUrl><![CDATA[%s]]></PicUrl>
					<Url><![CDATA[%s]]></Url>
					</item>
					";
        $item_str = "";
        foreach ($newsArray as $item){
            $item_str .= sprintf($itemTpl, $item['Title'], $item['Description'], $item['PicUrl'], $item['Url']);
        }
        $newsTpl = "<xml>
					<ToUserName><![CDATA[%s]]></ToUserName>
					<FromUserName><![CDATA[%s]]></FromUserName>
					<CreateTime>%s</CreateTime>
					<MsgType><![CDATA[news]]></MsgType>
					<Content><![CDATA[]]></Content>
					<ArticleCount>%s</ArticleCount>
					<Articles>
					$item_str</Articles>
					</xml>";

        $result = sprintf($newsTpl, $object->FromUserName, $object->ToUserName, time(), count($newsArray));
        return $result;
    }
	
	private function logger($log_content)
    {
      
    }
	
}
?>
