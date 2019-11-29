<?php

return [

    'company' => [
        'name'              => 'Nome',
        'email'             => 'E-mail',
        'phone'             => 'Telefone',
        'address'           => 'Endereço',
        'logo'              => 'Logo',
    ],
    'localisation' => [
        'tab'               => 'Localizção',
        'financial_start'   => 'Início do ano fiscal',
        'timezone'          => 'Fuso Horário',
        'date' => [
            'format'        => 'Formato da Data',
            'separator'     => 'Separador de Data',
            'dash'          => 'Traço (-)',
            'dot'           => 'Ponto (.)',
            'comma'         => 'Vírgula (,)',
            'slash'         => 'Barra (/)',
            'space'         => 'Espaço ( )',
        ],
        'percent' => [
            'title'         => 'Posição do (%)',
            'before'        => 'Antes do número',
            'after'         => 'Depois do número',
        ],
    ],
    'invoice' => [
        'tab'               => 'Faturas',
        'prefix'            => 'Formato do número',
        'digit'             => 'Número de dígitos',
        'next'              => 'Próximo número',
        'logo'              => 'Logotipo',
        'custom'            => 'Personalizado',
        'item_name'         => 'Nome do Item',
        'item'              => 'Itens',
        'product'           => 'Produtos',
        'service'           => 'Serviços',
        'price_name'        => 'Nome do preço',
        'price'             => 'Preço',
        'rate'              => 'Taxa',
        'quantity_name'     => 'Nome da quantidade',
        'quantity'          => 'Quantidade',
    ],
    'default' => [
        'tab'               => 'Padrões',
        'account'           => 'Conta Padrão',
        'currency'          => 'Moeda Padrão',
        'tax'               => 'Imposto Padrão',
        'payment'           => 'Método de pagamento padrão',
        'language'          => 'Idioma Padrão',
    ],
    'email' => [
        'protocol'          => 'Protocolo',
        'php'               => 'PHP Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP Host',
            'port'          => 'SMTP Porta',
            'username'      => 'SMTP Usuário',
            'password'      => 'SMTP Senha',
            'encryption'    => 'SMTP Criptografia',
            'none'          => 'Nenhum',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Sendmail Path',
        'log'               => 'Log Emails',
    ],
    'scheduling' => [
        'tab'               => 'Agendamento',
        'send_invoice'      => 'Enviar lembrete de Vendas',
        'invoice_days'      => 'Dias após o vencimento das Vendas',
        'send_bill'         => 'Enviar lembrete de Compras',
        'bill_days'         => 'Dias antes do vencimento das Compras',
        'cron_command'      => 'Comando Cron',
        'schedule_time'     => 'Iniciar Cron',
        'send_item_reminder'=> 'Enviar lembrete de Itens',
        'item_stocks'       => 'Enviar quando item possui estoque',
    ],
    'appearance' => [
        'tab'               => 'Aparência',
        'theme'             => 'Tema',
        'light'             => 'Claro',
        'dark'              => 'Escuro',
        'list_limit'        => 'Registros por Página',
        'use_gravatar'      => 'Usar Gravatar',
    ],
    'system' => [
        'tab'               => 'Sistema',
        'session' => [
            'lifetime'      => 'Finalizar sessão (Minutos)',
            'handler'       => 'Manipulador de sessão',
            'file'          => 'Arquivo',
            'database'      => 'Database',
        ],
        'file_size'         => 'Tamanho máximo do arquivo (MB)',
        'file_types'        => 'Tipos de arquivos permitidos',
        'flush_cache'        => 'Reiniciar o cache do sistma',
    ],

];
