<?php foreach ($users as $userlist): ?>

    <tbody aria-relevant="all" aria-live="polite" role="alert">

        <tr class="even">
            <td class="sorting_1">
                <?php echo $userlist['User']['firstname'] ?>
            </td>
                <td class="sorting_1">
                <?php echo $userlist['User']['firstname'] ?>
            </td>

            
            <td class="">

             <?php echo $userlist['User']['email']; ?>
            	
            </td>

              <td class="actions">
                <?php echo $this->Html->link(__('View'), array('controller' => 'ads','action' => 'view', $userlist['User']['id'])); ?> |
                <?php echo $this->Html->link(__('Edit'), array('controller' => 'ads','action' => 'edit', $userlist['User']['id'])); ?> |
                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ads','action' => 'delete', $userlist['User']['id']), array(), __('Are you sure you want to delete # %s?', $userlist['User']['id'])); ?>
            </td>

         
        </tr>

    </tbody>
<?php endforeach; ?>