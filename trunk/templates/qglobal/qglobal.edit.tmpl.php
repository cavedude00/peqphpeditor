        <div class="table_container" style="width: 700px;">
          <div class="table_header">
            <table width="100%" cellpadding="0" cellspacing="0">
              <tr>
                <td>Edit Quest Global</td>
                <td>
                  <div style="float:right">
                    <a onClick="return confirm('Really delete quest global <?=$id?>?');" href="index.php?editor=qglobal&qglobalid=<?=$id?>&action=6"><img src="images/remove3.gif" border="0" title="Delete Quest Global"></a>
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="table_content" cellpadding="0" cellspacing="0">
            <form name="qglobal" method="post" action="index.php?editor=qglobal&qglobalid=<?=$id?>&action=5">
              <table width="100%">
                <tr>
                  <td width="33%">
                    ID:<br>
                    <input type="text" name="id" value="<?=$id?>">
                  </td>
                  <td width="33%">
                    Name:<br>
                    <input type="text" name="name" value="<?=$name?>">
                  </td>
                  <td width="34%">
                    Value:<br>
                    <input type="text" name="value" value="<?=$value?>">
                  </td>
                </tr>
                <tr>
                  <td width="33%">
                    Player:<br>
                    <input type="text" name="charid" value="<?=$charid?>">
                  <td width="33%">
                    NPC:<br>
                    <input type="text" name="npcid" value="<?=$npcid?>">
                  </td>
                  <td width="34%">
                    Zone:<br>
                    <input type="text" name="zoneid" value="<?=$zoneid?>">
                  </td>
                </tr>
                <tr>
                  <td width="33%">
                    Expires:<br>
                    <input type="text" name="expdate" value="<?=$expdate?>">
                  </td>
                  <td width="33%">&nbsp;</td>
                  <td width="34%">&nbsp;</td>
                </tr>
              </table>
              <center>
                <input type="hidden" name="originalid" value="<?=$id?>">
                <input type="submit" value="Update Quest Global">
                <input type="button" value="Cancel Changes" onClick="history.back()">
              </center>
            </form>
          </div>
        </div>
