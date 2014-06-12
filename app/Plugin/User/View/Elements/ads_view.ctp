<?php foreach ($ads as $adslist): ?>

    <tbody aria-relevant="all" aria-live="polite" role="alert">

        <tr class="even">
            <td class="sorting_1">
                <?php echo $this->Html->image('/user/img/uploads/'.$adslist['Image'][0]['name'], array('alt' => 'CakePHP'))?>
            </td>
            <td class="">
            	<?php echo $adslist['Ad']['name']; ?><br/>
            </td>
            <td class="">
            	<?php echo $adslist['Ad']['selling_price']; ?>php 
            </td>
            <td class="">
            	<?php echo $adslist['Ad']['discount_price']; ?>
            </td>
            <td class="">
                <?php echo $adslist['Ad']['is_published']; ?> 
            </td>
            <td class="">
               <?php echo $adslist['Ad']['created']; ?>
            </td>
            <td class="actions">
                <?php //echo $this->Html->link(__('View'), array('action' => 'view', $adslist['Ad']['id'])); ?>
                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $adslist['Ad']['id'])); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $adslist['Ad']['id']), array(), __('Are you sure you want to delete # %s?', $adslist['Ad']['id'])); ?>
            </td>
        </tr>

    </tbody>
<?php endforeach; ?>