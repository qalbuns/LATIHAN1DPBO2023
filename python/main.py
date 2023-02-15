from mahasiswa import *

kampus = []
nama = ""
nim = ""
prodi = ""
fk = ""
n = 0

n = int(input("Masukkan jumlah mahasiswa : "))
print("----------------------")
for i in range(n):
    data_mahasiswa = mahasiswa()
    nama = input("- Nama:")
    nim = input("- Nim: ")
    prodi = input("- Prodi: ")
    fk = input("- Fakultas: ")
    print("----------------------")

    data_mahasiswa.setNama(nama)
    data_mahasiswa.setNim(nim)
    data_mahasiswa.setProdi(prodi)
    data_mahasiswa.setFakultas(fk)

    kampus.append(data_mahasiswa)


print("Daftar Mahasiswa")
print("----------------------")

for i in range(n):

    print("- Nama:", kampus[i].getNama())
    print("- Nim:", kampus[i].getNim())
    print("- Prodi:", kampus[i].getProdi())
    print("- Fakultas:", kampus[i].getFakultas())
