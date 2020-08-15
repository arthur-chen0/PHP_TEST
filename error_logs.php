<?php 
class error_logs{

function write($message)
    {

        $log  = logPath . logFile; 
        // echo "log path: " . $log;

        if (is_dir(logPath)) { //判斷檔案資料夾是否存在

            if (!file_exists($log)) { //判斷檔案是否存在

                $fh = fopen($log, 'a+') or die("Fatal Error !"); //建立文件
                $logcontent = date('Y-m-d H:i:s') . "  " . $message . "\r\n"; //要存的文字
                fwrite($fh, $logcontent); //寫入
                fclose($fh); //關閉

            } else { //如果存再，就用覆寫的方式edit()
            	echo "log absolute path: " . $log;
                $this->edit($log, $message);
            }
        } else { //資料夾不存在，所以建立資料夾後，再次呼叫write()
            if (mkdir(logPath, 0777) === true) {
                $this->write($message);
            }
        }
    }
    private function edit($log, $message)
    {
        $logcontent = date('Y-m-d H:i:s') . "  " . $message . "\r\n"; //要記錄得文字
        $logcontent = file_get_contents($log) . $logcontent;//添加在最前面
        file_put_contents($log, $logcontent); //上傳
    }
}

?> 