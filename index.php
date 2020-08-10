<?php
require_once "html.php";
require_once "items.php";

echo $html;
echo $head;
echo $clsHead;
echo $body;
echo $navBar;
echo $clsDiv;
echo $twoColumsTemplate;
echo $loginForm;
echo $itemsTableHead;
//For more content
for ($i = 0; $i < 3 ; $i++):
foreach($items as $key => $item):?>
<tr>
    <th><?= $item['item']?></th>
    <td><?= $item['model']?></td>
    <td><?= $item['type']?></td>
    <td><?= $item['price']?></td>
</tr>
<?php endforeach;
endfor;
echo $itemsTableEnd;
echo $clsBody;
echo $clsHtml;
?>