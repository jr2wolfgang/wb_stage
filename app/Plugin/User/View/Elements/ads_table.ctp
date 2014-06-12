<?php foreach ($ads as $adslist): ?>

    <tbody aria-relevant="all" aria-live="polite" role="alert">

        <tr class="even">
            <td class="sorting_1">
                <?php echo $this->Html->image('/user/img/uploads/'.$adslist['Image'][0]['name'], array('alt' => 'CakePHP'))?>
            </td>
            <td class="">

            	<?php echo $adslist['Ad']['name']; ?><br/>
            	Date posted:<?php echo $adslist['Ad']['created']; ?><br/>
            	
            </td>
            <td class="">
            	Price: <?php echo $adslist['Ad']['selling_price']; ?>php <br/>
            	<i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i><br/>
            	<i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
            </td>
            <td class="">
            	fsdff
            </td>
            <td class="">
                sadfa
            </td>
            <td class="">
                sadfa
            </td>
        </tr>

    </tbody>
<?php endforeach; ?>