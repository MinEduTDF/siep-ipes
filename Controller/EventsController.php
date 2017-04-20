<?php 
class EventsController extends AppController {
    $helpers = array('Report');
    
    function participants($id = null) {
        $this->layout = 'ajax';
        $this->set('event', $this->Events->findById($id));
    }
}
?> 