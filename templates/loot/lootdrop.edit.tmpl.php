      <table class="edit_form">
        <tr>
          <td class="edit_form_header">
            <?=$ltname?>
          </td>
        </tr>
        <tr>
          <td class="edit_form_content">
            <strong>LootTable:</strong> <?=$ltid?><br>
            <strong>LootDrop:</strong> <?=$ldid?><br><br>
            <form name="loottable" id="loottable" method="post" action="index.php?editor=loot&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&action=8&npcid=<?=$npcid?>&ltid=<?=$ltid?>&ldid=<?=$ldid?>">
              <strong>Probability:</strong><br>
              <input class="indented" type="text" size="5" name="prob" value="<?=$probability?>">%<br><br>
              <strong>Multiplier:</strong><br>
              <input class="indented" type="text" size="5" name="mult" value="<?=$multiplier?>"><br><br>
              <center>
                <input type="submit" name="submit" value="Submit Changes">
              </center>
            </form>
          </td>
        </tr>
      </table>
