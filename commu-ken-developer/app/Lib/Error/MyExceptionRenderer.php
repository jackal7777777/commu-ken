<?php
  App::uses('ExceptionRenderer', 'Error');
 
  class MyExceptionRenderer extends ExceptionRenderer {
        public function notFound($error) {
                $this->controller->redirect(array('controller' => 'errors', 'action' => 'error404'));
        }
        public function missingController($error) {
                $this->controller->redirect(array('controller' => 'errors', 'action' => 'error404'));
        }
        public function missingAction($error) {
                $this->controller->redirect(array('controller' => 'errors', 'action' => 'error404'));
        }
        public function missingWidget($error) {
                $this->controller->redirect(array('controller' => 'errors', 'action' => 'error404'));
        }
        public function FatalError($error) {
                $this->controller->redirect(array('controller' => 'errors', 'action' => 'error404'));
        }
        public function InternalError($error) {
                $this->controller->redirect(array('controller' => 'errors', 'action' => 'error500'));
        }
        public function MissingDatabase($error) {
                $this->controller->redirect(array('controller' => 'errors', 'action' => 'error500'));
        }
        public function MissingConnection($error) {
                $this->controller->redirect(array('controller' => 'errors', 'action' => 'error500'));
        }
  }
?>