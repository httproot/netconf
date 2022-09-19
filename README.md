# netconf

Examples
Initializing NETCONF using password authentication and then sending a custom RPC call

    $netConf = new NetConf(
        "192.168.0.100",
        new NetConfAuthPassword(
            [
                "username" => "lamoni",
                "password" => "phpsux"
            ]
        )
    );
    
    echo $netConf->sendRPC(
        "<get-config>".
            "<source>".
                "<running/>".
            "</source>".
        "</get-config>"
    );
Editing the configuration of a Junos device and committing the changes

    $netConf->editConfig(
        "<configuration>
            <interfaces>
                <interface>
                    <name>fe-0/0/0</name>
                    <description>Testing netconf</description>
                </interface>
            </interfaces>
        </configuration>",
        'candidate',
        ['custom-param' => 'custom-value']
    );
    
    
    if ($netConf->commit()->isRPCReplyOK()) {
        echo "Successfully committed, dude!";
    }
    else {
        echo "Something's wrong, man.";
    }
Using NETCONF's subtree filters to get certain config

    $getUsersNames = $netConf->getConfig(
        [
           "configuration/system/login/user" => [
               [
                   "name"=>"user"
               ]
           ]
        ]
    );
