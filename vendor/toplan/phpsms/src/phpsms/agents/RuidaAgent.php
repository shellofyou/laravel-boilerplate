<?php
/**
 * Created by PhpStorm.
 * User: eichcd
 * Date: 16-1-19
 * Time: 下午2:44
 */

namespace Toplan\PhpSms;

//use Toplan\PhpSms\Agent;

class RuidaAgent extends Agent
{


    /**
     * sms send process
     *
     * @param       $tempId
     * @param       $to
     * @param array $tempData
     * @param       $content
     */
    public function sendSms($tempId, $to, array $tempData, $content)
    {
        $this->sendContentSms($to, $content);
    }

    /**
     * content sms send process
     *
     * @param $to
     * @param $content
     */
    public function sendContentSms($to, $content)
    {
        $account = $this->mid;
        $password = $this->mpass;

        //$content = rawurlencode($content);
        $content = urlencode("$content");

        $post_data = "account={$account}&password={$password}&mobile=".$to."&content=".$content;
        $target = "http://120.25.202.19:8888/sms.aspx?action=send&userid=626&sendTime=&extno=";

        /*curl*/

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $target);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_NOBODY, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        $return_str = curl_exec($curl);
        //print $curl;
        //print $return_str;
        //exit;
        curl_close($curl);
        /*curl*/

        /*xml*/
        //$arr = _xml_to_array($return_str);
        $arr = json_decode(json_encode($return_str),true);
        /*xml*/

        if($arr['returnsms']['returnstatus']=='Success'){
//            $this->v = $arr['returnsms']['message'];
//            $this->error = 1;
            $this->result['info'] = $arr['returnsms']['message'];
            $this->result['code'] = 1;
        }else{
//            $this->v = $arr['returnsms']['message'];
//            $this->error = -1;
            $this->result['info'] = $arr['returnsms']['message'];
            $this->result['code'] = -1;
        }
//        $this->result['info'] = $result->resp->respCode;
//        $this->result['code'] = $result->resp->respCode;
    }

    /**
     * template sms send process
     *
     * @param       $tempId
     * @param       $to
     * @param array $tempData
     */
    public function sendTemplateSms($tempId, $to, array $tempData)
    {
        // TODO: Implement sendTemplateSms() method.
    }

    /**
     * voice verify
     *
     * @param $to
     * @param $code
     */
    public function voiceVerify($to, $code)
    {
        // TODO: Implement voiceVerify() method.
    }
}