 public function getMint($str){
        $min=0;
        $times=explode(':',$str);
        if(!empty($times[0])) {
            $min=$min+($times[0]*60);
        }
        if(!empty($times[1])) {
            $min= $min+$times[1];
        }
        return $min;
    }

    public function bestPrice($arr = []){
        $d = [];        
        if(!empty($arr)){
            $minAmt = 0;
            $maxAmt = 0;
            foreach($arr as $k=>$f){
                $mint = $this->getMint($f['outtTotalDutation']);
                if(empty($minAmt) || $minAmt > $f['price']){
                    $minAmt = $f['price'];
                }
                if(empty($maxAmt) || $maxAmt < $f['price']){
                    $maxAmt = $f['price'];
                }                
               $d[$mint] = $f['price'];
            }
        }
        $avgAmt = ($minAmt+$maxAmt)/2;
        $shortData = [];
        foreach($d as $t=>$p){
            if($avgAmt >= $p){
                $shortData[$t] = $p;
            }
        }
        return $shortData;
    }
----


image upload check size
$(document).on('change', 'input[name=upload_file]',function () {
    const file = this.files[0];
  //  console.log(file);
    const fileType = file['type'];
    const fileSize = file['size'];
    var status=2;
    var statusupload=2;
    const validImageTypes = ['video/mp4','video/ogx','video/webm','video/ogg'];
    if (!validImageTypes.includes(fileType)) {
         var status=1;
        $('button[type=submit]').attr('disabled',true);
        alert('Only mp4,ogx,webm,and ogg file types are allowed');
        this.value = '';
    }
    if (fileSize >'20000000')
    {
        var statusupload=1;
        $('button[type=submit]').attr('disabled',true);
        alert('Please upload max size 20MB');
         this.value = '';
    }
    else
    {
       $('button[type=submit]').attr('disabled',false); 
    }
});
https://stackoverflow.com/questions/38745988/convert-html-div-to-image-in-jquery


https://webmobtuts.com/backend-development/implementing-a-chat-app-using-laravel-and-pusher/

php artisan config:clear
php artisan cache:clear
composer dump-autoload
php artisan view:clear
php artisan route:clear