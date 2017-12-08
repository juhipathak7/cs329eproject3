import unittest
import index
import addition_quiz_1
import addition_quiz_2

class TestTrivia(unittest.TestCase):

	#Tests set up of main page
	def setUp(self):
		self.testdata = open("index.py").read()

	#Test whether the score is an integer or not before playing the game
	def testScore(self):
		correct = 0
		self.assertTrue(type(correct) is int)


if __name__ == '__index__':
	unittest.index()