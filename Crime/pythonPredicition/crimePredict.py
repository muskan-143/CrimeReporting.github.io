
# import pandas as pd
# import numpy as np
# import matplotlib.pyplot as plt
# import seaborn as sns

# df = pd.read_csv('../pythonPredicition/crimeRate.csv')
# df.head()


# from sklearn.ensemble import ExtraTreesClassifier
# from sklearn.model_selection import train_test_split
# from sklearn.metrics import confusion_matrix , plot_roc_curve
# from imblearn.over_sampling import SMOTE
# smote = SMOTE()
 
# #stratify for equal no. of classes in train and test set
# x_train,x_test ,y_train,y_test = train_test_split(df.iloc[:,1:-1],df.iloc[:,-1], stratify=df.iloc[:,-1],test_size=0.2 ,random_state = 42)
 
# X_re ,y_re= smote.fit_resample(x_train,y_train)


# clf = ExtraTreesClassifier()
# clf.fit(X_re,y_re)
# clf.score(x_test,y_test)

# # plot_roc_curve( clf,x_test,y_test)

# # from turtle import color
# import pandas as pd
# import seaborn as sns 
# import numpy as np


# data = pd.read_csv('crimeRate.csv')
# # print(data.head())
# # print(data)
# # print(data.columns)
# # print(data.shape)
# # print(data.isnull().sum())

# sns.relplot(x='Weapon', y='Location', data = data)


import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
 
data = pd.read_csv("crimeRate.csv")
   
print (data.head(10))

import pandas as pd
import matplotlib.pyplot as plt
data = pd.read_csv("crimeRate.csv")
 
# data.hist(bins=50,figsize=(10,10))
data.plot.bar(x='Location',y='Total Incidents')
# plt.show()