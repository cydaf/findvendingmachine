
    <input type="button" class="btn btn-sm" value="吃錢" id="btn">
    <input type="button" class="btn btn-sm" value="商品錯誤" id="btn2">
    <input type="button" class="btn btn-sm" value="存貨不足" id="btn3">
    <input type="button" class="btn btn-sm" value="沒看到販賣機" id="btn4">
    <br><br>

    <form enctype="multipart/form-data" action="action.php" method="post">
        <input type="hidden" name="ven_num" id="ven_num_id" >
        <div class="row">

            <div class="col-12">
                <div class="group">
                    <p>請敘述故障狀況</p>
                    <input id="txt" type="textarea"  width="300px" height="100px" name="error_words" required>
                    
                    
                </div>
            </div>

            <br> <br> <br>
            <div class="col-12">
                <div class="group">
                    <p>圖片上傳(可忽略)</p>
                    <input type="file" class="btn" name="my_file">
                    <br>
                    <br>


                </div>
            </div>

        </div>
        <center>
        <button type="submit" class="btn y-bt" id="post-btn">提交 </button>
            <!-- <input type="submit" class="btn original-btn"> -->
        </center>
    </form>

