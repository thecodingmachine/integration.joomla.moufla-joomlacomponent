<?php
// No direct access to this file
//defined('_JEXEC') or die('Restricted access');

// import Joomla controller library
jimport('joomla.application.component.controller');

/**
 * Moufla Component Controller
 */
class MouflaController extends JController {

    public function doSomething() {
        var_dump("--Je suis dans doSomething du controller--");
        echo "le test de la mort qui tue2";

        parent::display();
 /*       // You can also return something like:
        $response = array("success" => false, "error"=> "Could not find ...");

        // Get the document object.
        $document = JFactory::getDocument();

        // Set the MIME type for JSON output.
        $document->setMimeEncoding('application/json');

        // Change the suggested filename.
        JResponse::setHeader('Content-Disposition','attachment;filename="result.json"');

        echo json_encode($response);*/
    }
}

// include splash common
// mater dans moufpress la bonne fonction a appeler
// comparer les routes