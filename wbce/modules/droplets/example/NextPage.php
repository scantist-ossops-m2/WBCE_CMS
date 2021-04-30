//:Create a next link to your page
//:Display a link to the next page on the same menu level
$info = show_menu2(0, SM2_CURR, SM2_START, SM2_ALL|SM2_BUFFER, '[if(class==menu-current){[level] [sib] [sibCount] [parent]}]', '', '', '');
list($nLevel, $nSib, $nSibCount, $nParent) = explode(' ', $info);

// show next
$nxt = $nSib < $nSibCount ? $nSib + 1 : 0;
if ($nxt > 0) {
    return show_menu2(0, SM2_CURR, SM2_START, SM2_ALL|SM2_BUFFER, "[if(sib==$nxt){&gt;&gt; [a][menu_title]</a>}]", '', '', '');
} else {
    return '(no next)';
}
