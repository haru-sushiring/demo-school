<?php

class Wwm_Ssl_Action_Create_Challenge_File extends Wwm_Migration_Action {
    public static $action_key = 'create_challenge_file';

    public function do_action()
    {
        // get parameter
        $file_name = $this->get_parameter( 'file_name', true );
        $data = $this->get_parameter( 'data', true );

        $file_dir = WWM_DOCUMENT_ROOT . '.well-known' . DIRECTORY_SEPARATOR . 'acme-challenge';
        $file_path = $file_dir .DIRECTORY_SEPARATOR . $file_name;

        if ( ! file_exists( $file_dir ) ) {
            @mkdir( $file_dir, 0755, true );
        }

        if ( file_put_contents( $file_path, $data ) ) {
            return array(
                'message' => 'File write success!',
                'success' => true
            );
        }
        return array(
            'message' => 'File write failure!',
            'success' => false
        );
    }
}