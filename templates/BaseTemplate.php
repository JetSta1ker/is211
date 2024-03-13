<?php

class BaseTemplate {  
    public function getBaseTemplate() {
        $template = <<<END
        <!DOCTYPE html>
        <html lang="ru">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>%s</title>
        </head>
        <body>
            %s
        </body>
        </html>
        END;
        return $template;
    }
}