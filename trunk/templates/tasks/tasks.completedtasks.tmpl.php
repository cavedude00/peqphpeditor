        <div class="table_container" style="width: 700px;">
          <div class="table_header">
            <table width="100%" cellpadding="0" cellspacing="0">
              <tr>
                <td>Completed Tasks</td>
                <td>
                  <?echo ($page > 1) ? "<a href='index.php?editor=tasks&action=36&page=1" . (($sort != "") ? "&sort=" . $sort : "") . "'><img src='images/first.gif' border='0' width='12' height='12' title='First'/></a>" : "<img src='images/first.gif' border='0' width='12' height='12'/>";?>
                  <?echo ($page > 1) ? "<a href='index.php?editor=tasks&action=36&page=" . ($page - 1) . (($sort != "") ? "&sort=" . $sort : "") . "'><img src='images/prev.gif' border='0' width='12' height='12' title='Previous'/></a>" : "<img src='images/prev.gif' border='0' width='12' height='12'/>";?>
                  <?echo $page . " of " . $pages;?>
                  <?echo ($page < $pages) ? "<a href='index.php?editor=tasks&action=36&page=" . ($page + 1) . (($sort != "") ? "&sort=" . $sort : "") . "'><img src='images/next.gif' border='0' width='12' height='12' title='Next'/></a>" : "<img src='images/next.gif' border='0' width='12' height='12'/>";?>
                  <?echo ($page < $pages) ? "<a href='index.php?editor=tasks&action=36&page=" . $pages . (($sort != "") ? "&sort=" . $sort : "") . "'><img src='images/last.gif' border='0' width='12' height='12' title='Last'/></a>" : "<img src='images/last.gif' border='0' width='12' height='12'/>";?>
                </td>
              </tr>
            </table>
          </div>
          <table class="table_content2" width="100%">
<?if (isset($completed_tasks)):?>
            <tr>
              <td align="center"><strong><?echo ($sort == 1) ? "Character <img src='images/sort_red.bmp' border='0' width='8' height='8'/>" : "<a href='index.php?editor=tasks&action=36&sort=1'>Character <img src='images/sort_green.bmp' border='0' width='8' height='8' title='Sort by Character'/></a>";?></strong></td>
              <td align="center"><strong><?echo ($sort == 2) ? "Task <img src='images/sort_red.bmp' border='0' width='8' height='8'/>" : "<a href='index.php?editor=tasks&action=36&sort=2'>Task <img src='images/sort_green.bmp' border='0' width='8' height='8' title='Sort by Task'/></a>";?></strong></td>
              <td align="center"><strong>Activity ID</strong></td>
              <td align="center"><strong>Completed Time</strong></td>
              <td width="5%">&nbsp;</td>
            </tr>
<?$x=0;
foreach($completed_tasks as $task):?>
            <tr bgcolor="#<? echo ($x % 2 == 0) ? "BBBBBB" : "AAAAAA";?>">
              <td align="center"><?echo "<a href='index.php?editor=player&playerid=" . $task['charid'] . "'>" . getPlayerName($task['charid'])?></a> (<?=$task['charid']?>)</td>
              <td align="center"><?echo "<a href='index.php?editor=tasks&tskid=" . $task['taskid'] . "'>" . getTaskTitle($task['taskid'])?></a> (<?=$task['taskid']?>)</td>
              <td align="center"><?=$task['activityid']?></td>
              <td align="center"><?=get_real_time($task['completedtime'])?></td>
              <td align="right"><a onClick="return confirm('Really delete <?=getTaskTitle($task['taskid'])?> from <?=getPlayerName($task['charid'])?>?');" href="index.php?editor=tasks&tskid=<?=$task['taskid']?>&charid=<?=$task['charid']?>&action=38"><img src="images/remove3.gif" border="0" title="Delete Completed Task"></a></td>
            </tr>
<?$x++;
endforeach;
else:?>
            <tr>
              <td align="left" width="100" style="padding: 10px;">No Completed Tasks</td>
            </tr>
<?endif;?>
          </table>
        </div>
