class mahasiswa:
    def __init__(self):
        self.nama = ""
        self.nim = ""
        self.prodi = ""
        self.fk = ""

    def setNama(self, nama):
        self.nama = nama

    def getNama(self):
        return self.nama

    def setNim(self, nim):
        self.nim = nim

    def getNim(self):
        return self.nim

    def setProdi(self, prodi):
        self.prodi = prodi

    def getProdi(self):
        return self.prodi

    def setFakultas(self, fk):
        self.fk = fk

    def getFakultas(self):
        return self.fk
