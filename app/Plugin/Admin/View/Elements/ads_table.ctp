<?php foreach ($ads as $adslist): ?>

    <tbody aria-relevant="all" aria-live="polite" role="alert">

        <tr class="even">
            <td class="sorting_1">
                <?php echo $this->Html->image('/user/img/uploads/'.$adslist['PrimaryImage']['name'], array('style' => 'width: 150px;'))?>
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
            
                Price: <?php echo $adslist['Ad']['discount_price']?> php <br/>
            </td>
            <td class="publish">
               <?php echo ($adslist['Ad']['is_published'] == '1') ? '<i class="ace-icon fa fa-check bigger-110" title="publish"></i>' : '<i class="ace-icon fa fa-exclamation-triangle red bigger-130" title="Need Review"></i> ';  ?>
            </td>
            <td class="">
                 <?php echo $this->Time->timeAgoInWords($adslist['Ad']['created']); ?>
            </td>
              <td class="actions">
                <?php echo $this->Html->link(__('Review'), array('controller' => 'ads','action' => 'view', $adslist['Ad']['id'])); ?> |
                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ads','action' => 'delete', $adslist['Ad']['id']), array(), __('Are you sure you want to delete # %s?', $adslist['Ad']['id'])); ?>
            </td>
        </tr>

    </tbody>
<?php endforeach; ?>