<?php

class Wwm_Ssl_Action_Delete_Challenge_File extends Wwm_Migration_Action {
    public static $action_key = 'delete_challenge_file';

    public function do_action()
    {
        $success = false;
        $well_known_dir = WWM_DOCUMENT_ROOT . '.well-known';
        $acme_challenge_dir = $well_known_dir . DIRECTORY_SEPARATOR . 'acme-challenge';

        if ( file_exists($acme_challenge_dir) ) {
            // acme-challengeディレクトリ以下のファイルを全て削除する
            foreach ( glob( $acme_challenge_dir . DIRECTORY_SEPARATOR . '*' ) as $file ) {
                if ( is_file($file) ) {
                    unlink( $file );
                }
            }

            rmdir( $acme_challenge_dir );
            rmdir( $well_known_dir );
            $success = true;
        }

        return array(
            'success' => $success
        );
    }
}