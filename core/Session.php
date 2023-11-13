<?
class Session
{
    /*
     * data(key, value) => set session
     * data(key) => get session
     * */
    static public function data($key = '', $value = ''){
        $sessionKey = self::isInvalid();

        if(!empty($value)){
            if(!empty($key)){
                $_SESSION[$sessionKey][$key] = $value;
                return true;
            }
            return false;
        } else {
            if (empty($key)){
                if(isset($_SESSION[$sessionKey])){
                    return $_SESSION[$sessionKey];
                }
            } else {
                if (isset($_SESSION[$sessionKey][$key])) {
                    return $_SESSION[$sessionKey][$key]; //get session
                }
            }
        }
    }

    /*
     * set flash data => giống như set session
     * get flash data => giống như get session, xóa luôn session sau khi get
     * */
    static public function flash($key='', $value=''){
        $dataFlash = Session::data($key, $value);
        if(empty($value)){
            self::delete($key);
        }
        return $dataFlash;
    }

    static public function delete($key = ''){
        $sessionKey = self::isInvalid();
        if(!empty($key)){
            if(isset($_SESSION[$sessionKey][$key])){
                unset($_SESSION[$sessionKey][$key]);
                return true;
            } else {
                return false;
            }
        } else {
            unset($_SESSION[$sessionKey]);
            return true;
        }
    }

    static public function showErrors($message){
        $data = ['message'=>$message];
        App::$app->loadError('exception', $data);
        die();
    }

    static function isInvalid(){
        global $config;
        if (!empty($config['session'])){
            $sessionConfig = $config['session'];
            if (!empty($sessionConfig['session_key'])){
               $sessionKey = $sessionConfig['session_key'];
                return $sessionKey;
            } else {
    self::showErrors('Thiếu cấu hình session, vui lòng kiểm tra lại: configs/session.php');
}
} else {
    self::showErrors('Thiếu cấu hình session, vui lòng kiểm tra lại: configs/session.php');
}
}
}
