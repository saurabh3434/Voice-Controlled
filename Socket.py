import sys
from socket import *
import time
address = ( '192.168.0.75', 5000)
client_socket = socket(AF_INET, SOCK_DGRAM)
client_socket.settimeout(1)
data = sys.argv[1]
client_socket.sendto(data.encode(), address)
try:
	rec_data, addr = client_socket.recvfrom(2048)
	print (rec_data)
except:
	pass