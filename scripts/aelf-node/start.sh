#!/bin/bash
dir=`pwd`
ip=`ip a | grep eth0 |grep 'inet' | awk -F/ '{print $1}'| awk '{print $2}'`
sudo sed -i "s/172.31.8.57/$ip/g" appsettings.json 
sudo docker pull aelf/node:dev
sudo docker run -itd --name aelf-node-test -v $dir:/opt/node -v $dir/keys:/root/.local/share/aelf/keys -p 8001:8000 -p 6800:6800 -w /opt/node aelf/node:dev dotnet /app/AElf.Launcher.dll
sleep 30
height=`curl -s http://$ip:8001/api/blockChain/blockHeight`
echo "height is $height"
