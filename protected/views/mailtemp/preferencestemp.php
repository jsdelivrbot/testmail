<?php include('header.php'); ?>
<!-- text description -->
<tr>
    <td valign="" bgcolor="#fafafa" height="" align="left" style="line-height:0px; font-size:16px">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody>
                <tr>

                    <td width="90%" valign="middle" align="left" style="line-height:22px; color: #828282; font-size:16px; font-family:'Nunito'"> 
                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tbody>

                                <tr>
                                    <td height=""  valign="middle" align="left" style="line-height:20px;padding-top:5px;color: #E3762D;font-size:16px; font-family:Nunito;font-family:'Nunito'">
                                        Hello <?php echo isset($userName) ? $userName : "User"; ?>,
                                    </td>
                                </tr>

                                <tr>
                                    <td height=""  valign="middle" align="left" style="line-height:22px; color: #00BDAE; font-size:16px; margin-left:10px;font-family:'Nunito'">
                                        Greetings!
                                    </td>
                                </tr>
                                <tr>
                                    <td height=""  valign="middle" align="left" style="line-height:22px; color: #6b6b6b; font-size:14px; font-family:'Nunito'">
                                        <?php echo $type; ?> <?php echo $status; ?> Successfully.
                                    </td>
                                </tr>
                                <tr>
                                    <td height=""  valign="middle" align="left" style="line-height:22px; color: #6b6b6b; font-size:14px; font-family:'Nunito'">
                                        We appreciate your interest and urge you to keep using MavPay.
                                    </td>
                                </tr>
                                <tr>
                                    <td height="5"></td>
                                </tr>
                                <?php include('footer.php'); ?>